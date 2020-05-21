<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Faq;
use Illuminate\Support\Facades\Hash;

class FaqController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $FAQS = Faq::all();
        return view('Faqs.list', ['faqs' => $FAQS]);
    }

    /**
     * Show the Create FAQ
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function displayCreate()
    {
        return view('Faqs.create');
    }

    public function create(Request $request)
    {
        $activated = $request['activated'] === true ? 1 : 0;
        Faq::create([
            'question' => $request['question'],
            'answer' => $request['answer'],
            'activated' => $activated,
            'order' => $request['order']
        ]);
        return back()->with('success','FAQ Created successfully!');
        return redirect('/dashboard/faqs');
    }

    public function displayEdit($id)
    {
        $FAQtoEdit = Faq::find($id);
        return view('Faqs.edit', ['FAQ' => $FAQtoEdit]);
    }
    public function edit($id, Request $request)
    {
        $FAQtoEdit = Faq::find($id);
        $FAQtoEdit->Question = $request['question'];
        $FAQtoEdit->Answer = $request['answer'];
        $FAQtoEdit->Order = $request['order'];

        $FAQtoEdit->save();

        $FAQS = Faq::all();
        return back()->with('success','FAQ Updated successfully!');
        return view('Faqs.list', ['faqs' => $FAQS]);

    }
    public function delete($id)
    {
        $FAQtoDelete = Faq::findOrFail($id);
        $FAQtoDelete->delete();
        return back()->with('success','FAQ Deleted successfully!');

    }
}

