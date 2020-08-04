<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
//use Intervention\Image\Facades\Image;

class ArticlesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = articles::all();
       return view('admin/articles/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/articles/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'titre' => ['required','max:255'],
            'img' => ['required','image'],
            'content' => 'required'
        ]);

         //dd($request('img'));
        $img = request('img')->store('articlesImg','public');

        //$image = Image::make(public_path("storage/{$img}"))->fit(1200,700);
        //$img->save();
       
        $student = articles::create([

            'titre' => $data['titre'],
            'img' => $img,
            'content' => $data['content']

        ]);

        return redirect('/articles')->with('completed', 'article has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $articles = articles::findOrFail($id);
         $articles->delete();
        

        return redirect('/articles')->with('completed', 'article has been deleted');
    }
}






/*
namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = articles::all();
        return view('admin/articles/index', compact('articles'));
    }

    public function create()
    {
        return view('admin/articles/create');
    }



    public function store(Request $request)
    {
        $storeData = $request->validate([
            'titre' => 'required|max:255',
            'img' => 'max:255',
            'content' => 'required',
            'like' => 'required|numeric',
            'applay' => 'required|numeric',
        ]);
        $student = articles::create($storeData);

        return redirect('/articles')->with('completed', 'Student has been saved!');
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $formation = formationModel::findOrFail($id);
        return view('admin/articles/update', compact('articles'));
    }

  
    public function update(Request $request, $id)
    {
        $storeData = $request->validate([
            'titre' => 'required|max:255',
            'img' => 'max:255',
            'content' => 'required',
            'like' => 'required|numeric',
            'applay' => 'required|numeric',
        ]);
        $student = articles::create($storeData);

        return redirect('/articles')->with('completed', 'Student has been saved!');
    }

    public function update2( $id)
    {
        // $updateData = $request('mame','deleted');
        // formationModel::whereId($id)->update($updateData);
        return redirect('/formations')->with('completed', 'Student has been updated');
    }
    public function destroy($id)
    {
        $formation = formationModel::findOrFail($id);
        // $updateData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'phone' => 'required|numeric',
        //     'password' => 'required|max:255',
        // ]);

        return redirect('/formations')->with('completed', 'formation has been deleted');
    }
}