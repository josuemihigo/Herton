<?php

namespace App\Http\Controllers;

use App\Contactmodel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\RequiredIf;
class ContactController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contactmodel::all();
        return view('admin/contact/index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/contact/create');
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
            'adresse' => 'required|max:255',
            'email' => 'required|max:255',
            'telephone' => 'required|numeric',
            'web' => 'required|max:255',
        ]);
        $contact = Contactmodel::create($storeData);

        return redirect('/contacts')->with('completed', 'desc faq has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($contact_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($contact_id)
    {
        // $contacts = Contactmodel::findOrFail($contact_id);
        $contacts = Contactmodel::where('contact_id', $contact_id)->firstOrfail();

        return view('admin/contact/update', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contact_id)
    {
        $updateData = $request->validate([
            'adresse' => 'required|max:255',
            'email' => 'required|max:255',
            'telephone' => 'required|numeric',
            'web' => 'required|max:255',
        ]);
        Contactmodel::where('contact_id', $contact_id)->update($updateData);

        // Contactmodel::whereId($contact_id)->update($updateData);
        return redirect('/contacts')->with('message', 'le contact est bien modifie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($contact_id)
    {
        $aproposs = Contactmodel::where('contact_id', $contact_id)->delete();;
        return redirect('/contacts')->with('completed', 'contacts has been deleted');
    }
}
