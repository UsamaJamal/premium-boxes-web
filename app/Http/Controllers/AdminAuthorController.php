<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AdminAuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next){
            if(!Session::has('admin_user_name') || !Session::has('admin_user_password')){
                return redirect('admin/login'); 
            }
            return $next($request);
        });
    }

    public function index()
    {
        $data['authors'] = DB::table('authors')->get();
        return view('adminlte.author.index', $data);
    }

    public function create()
    {
        return view('adminlte.author.create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'email' => $request->email,
            'bio' => $request->bio,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'website' => $request->website,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('uploads/authors/'), $filename);
            $data['profile_image'] = $filename;
        }

        $authorId = DB::table('authors')->insertGetId($data);

        return redirect('admin/authors')->with('success', 'Author created successfully!');
    }

    public function edit($id)
    {
        $data['author'] = DB::table('authors')->where('id', $id)->first();
        $data['blogs'] = DB::table('blog')->get();
        $data['assigned_blogs'] = DB::table('blog')->where('author_id', $id)->pluck('blog_id')->toArray();
        return view('adminlte.author.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'email' => $request->email,
            'bio' => $request->bio,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'website' => $request->website,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('uploads/authors/'), $filename);
            $data['profile_image'] = $filename;
        }

        DB::table('authors')->where('id', $id)->update($data);

        // Handle assigned blogs
        $assignedBlogs = $request->input('blogs', []);
        
        DB::table('blog')->where('author_id', $id)->whereNotIn('blog_id', $assignedBlogs)->update(['author_id' => null]);

        if (!empty($assignedBlogs)) {
            DB::table('blog')->whereIn('blog_id', $assignedBlogs)->update(['author_id' => $id]);
        }

        return redirect('admin/authors')->with('success', 'Author updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('blog')->where('author_id', $id)->update(['author_id' => null]);
        DB::table('authors')->where('id', $id)->delete();
        
        return redirect('admin/authors')->with('success', 'Author deleted successfully!');
    }
}
