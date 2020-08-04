<?php

namespace App\Http\Controllers;

use App\descfaqmodel;
use App\faqmodel;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=descfaqmodel::all();
        $faqs = faqmodel::all();
        return view('admin/faq/index', compact('faqs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=descfaqmodel::all();
        return view('admin/faq/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'reponse' => 'required|max:5000',
            'question' => 'required|max:255',
            'categorie' => 'required|max:20',
        ]);
        $student = faqmodel::create($storeData);

        return redirect('/faqs')->with('message', 'FAQ enregistrer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($faq_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($faq_id)
    {
        $categories=descfaqmodel::all();
        $faqs = faqmodel::where('faq_id', $faq_id)->firstOrfail();
        return view('admin/faq/update', compact('faqs','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faq_id)
    {
        $storeData = $request->validate([
            'reponse' => 'required|max:5000',
            'question' => 'required|max:255',
            'description' => 'required|numeric',
        ]);
        faqmodel::whereId($faq_id)->update($storeData);
        return redirect('/faqs')->with('message', 'FAQ est modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($faq_id)
    {


        return redirect('/faqs')->with('message', 'faq a ete supprime avec succes');
    }
}
