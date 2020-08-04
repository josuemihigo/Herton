<?php

namespace App\Http\Controllers\Admin;
use App\faqmodel;
use App\descfaqmodel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
        return view('admin/', compact('faqs','categories'));
    }

}
