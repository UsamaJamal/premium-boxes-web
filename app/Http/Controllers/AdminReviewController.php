<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminReviewController extends Controller
{
    public function index()
    {
        $data['reviews'] = DB::table('product_reviews')
            ->join('product', 'product_reviews.product_id', '=', 'product.product_id')
            ->select('product_reviews.*', 'product.title as product_title')
            ->orderBy('product_reviews.id', 'desc')
            ->get();
        return view('adminlte/reviews/showreviews', $data);
    }

    public function approve($id)
    {
        DB::table('product_reviews')->where('id', $id)->update(['status' => 1]);
        return redirect()->back()->with('success', 'Review approved successfully.');
    }

    public function delete($id)
    {
        DB::table('product_reviews')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
