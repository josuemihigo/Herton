<?php

namespace App\Http\Controllers;

use App\aproposmodel;
use App\blogmodel;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blogmodel::all();
        return view('admin/blogblog/index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/blogblog/create');
    }

    /**
     * Store a newly created resource in storage.
     *    protected $fillable = ['resume', 'fichier', 'utilisateur'];

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd('fichier');
            $blogs = blogmodel::create($this->validateur());
            // dd($blogs->fichier);

            $this->getfile($blogs);
            // dd($blogs->fichier);


        return redirect('/blogs')->with('message', 'L\'artcle a été enregistré!');
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
    public function edit($blog_id)
    {
        // $blogs = aproposmodel::findOrFail($apropos_id);
        $blogs = blogmodel::where('blog_id', $blog_id)->firstOrfail();
        return view('admin/blogblog/update', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $blog_id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $blog_id)
    {

        $blogs=blogmodel::where('blog_id', $blog_id)->update($this->validateur());
        $this->getfile($blogs);

        return redirect('/blogs')->with('message', 'L\'artcle a été modifié avec succé!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $apropos_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($apropos_id)
    {
        // $blogs = aproposmodel::findOrFail($apropos_id);
        $blogs = aproposmodel::where('apropos_id', $apropos_id)->delete();;

        // $blogs=aproposmodel::where('apropos_id', $apropos_id)
        //             ->update(['apropos_id' =>1]);

        return redirect('/blogs')->with('completed', 'Student has been deleted');
    }


    private function validateur(){
    return  request()->validate([
            'resume' => 'required|max:255',
            'fichier' => 'sometimes|image|max:6000',
            'utilisateur' => 'required|max:255',
        ]);
    }
    private function getfile(blogmodel $blogs){
        if (request('fichier')) {
            # code...
            $blogs->update([
                'fichier' =>request('fichier')->store('blogsfiles','public'),
            ]);
        }
    }
}
