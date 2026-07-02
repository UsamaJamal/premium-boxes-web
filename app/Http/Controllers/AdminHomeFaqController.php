<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminHomeFaqController extends Controller
{
    public function index()
    {
        $data['faqs'] = DB::table('home_faqs')->orderBy('id', 'asc')->get();
        return view('adminlte.homefaqs.index', $data);
    }

    public function add_view()
    {
        // For modal-based add, we might not need a separate view, but if we do:
        return view('adminlte.homefaqs.add');
    }

    public function add(Request $request)
    {
        $data = array(
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'status' => $request->input('status', 1),
            'created_at' => now(),
            'updated_at' => now()
        );

        DB::table('home_faqs')->insert($data);
        return redirect('admin/homefaqs')->with('success', 'FAQ Added Successfully');
    }

    public function edit($id)
    {
        $data['faq'] = DB::table('home_faqs')->where('id', $id)->first();
        return view('adminlte.homefaqs.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'status' => $request->input('status', 1),
            'updated_at' => now()
        );

        DB::table('home_faqs')->where('id', $id)->update($data);
        return redirect('admin/homefaqs')->with('success', 'FAQ Updated Successfully');
    }

    public function delete($id)
    {
        DB::table('home_faqs')->where('id', $id)->delete();
        return redirect('admin/homefaqs')->with('error', 'FAQ Deleted Successfully');
    }
}
