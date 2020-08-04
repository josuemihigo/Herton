<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index()
    {
        return view('/admin/Contact/liste');
    }
    public function create()
    {
    # code...

    return view('/admin/Contact/liste');

    }
    public function update(Request $request,$id)
    {
    return $request->all();
    return view('/admin/Contact/liste');

    }
    public function delete()
    {
        return view('/admin/Contact/liste');
    }
}
