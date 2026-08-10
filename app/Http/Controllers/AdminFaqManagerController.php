<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FaqCategory;
use App\FaqQuestion;
use DB;
use Session;

class AdminFaqManagerController extends Controller
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

    // --- Categories ---
    public function indexCategories()
    {
        $categories = FaqCategory::all();
        return view('adminlte.faq_manager.categories.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('adminlte.faq_manager.categories.create');
    }

    public function storeCategory(Request $request)
    {
        FaqCategory::create($request->all());
        return redirect('admin/faq-manager/categories')->with('success', 'Category created successfully.');
    }

    public function editCategory($id)
    {
        $category = FaqCategory::findOrFail($id);
        return view('adminlte.faq_manager.categories.edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = FaqCategory::findOrFail($id);
        $category->update($request->all());
        return redirect('admin/faq-manager/categories')->with('success', 'Category updated successfully.');
    }

    public function deleteCategory($id)
    {
        FaqCategory::findOrFail($id)->delete();
        FaqQuestion::where('faq_category_id', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }

    // --- Questions ---
    public function indexQuestions()
    {
        $questions = FaqQuestion::with('faqCategory')->get();
        return view('adminlte.faq_manager.questions.index', compact('questions'));
    }

    public function createQuestion()
    {
        $categories = FaqCategory::all();
        return view('adminlte.faq_manager.questions.create', compact('categories'));
    }

    public function storeQuestion(Request $request)
    {
        FaqQuestion::create($request->all());
        return redirect('admin/faq-manager/questions')->with('success', 'Question created successfully.');
    }

    public function editQuestion($id)
    {
        $question = FaqQuestion::findOrFail($id);
        $categories = FaqCategory::all();
        return view('adminlte.faq_manager.questions.edit', compact('question', 'categories'));
    }

    public function updateQuestion(Request $request, $id)
    {
        $question = FaqQuestion::findOrFail($id);
        $question->update($request->all());
        return redirect('admin/faq-manager/questions')->with('success', 'Question updated successfully.');
    }

    public function deleteQuestion($id)
    {
        FaqQuestion::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Question deleted successfully.');
    }
}
