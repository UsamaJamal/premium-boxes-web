<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterSettingsController extends Controller
{
    public function edit()
    {
        $settings = DB::table('footer_settings')->first();
        if (!$settings) {
            DB::table('footer_settings')->insert([
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $settings = DB::table('footer_settings')->first();
        }

        $categories = DB::table('add_category')->get();
        $products = DB::table('product')->get();

        return view('adminlte.footer_settings.edit', compact('settings', 'categories', 'products'));
    }

    public function update(Request $request)
    {
        $settings = DB::table('footer_settings')->first();

        $data = [
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'instagram_url' => $request->input('instagram_url'),
            'pinterest_url' => $request->input('pinterest_url'),
            'linkedin_url' => $request->input('linkedin_url'),
            'hot_categories' => json_encode($request->input('hot_categories', [])),
            'footer_products' => json_encode($request->input('footer_products', [])),
            'updated_at' => now()
        ];

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = str_replace(' ', '-', $extension);
            $file->move('uploads/footer/', $filename);
            $data['logo'] = 'uploads/footer/' . $filename;
        }

        DB::table('footer_settings')->where('id', $settings->id)->update($data);

        return redirect()->back()->with('success', 'Footer settings updated successfully!');
    }
}
