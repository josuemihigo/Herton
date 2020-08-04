<?php

namespace App\Http\Controllers;

use App\aproposmodel;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aproposs = aproposmodel::all();
        if (aproposmodel::all()->count()==0) {

            return view('admin/apropos/create');
        }
        else
        {
            $aproposs = aproposmodel::all();
        return view('admin/apropos/index', compact('aproposs'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aproposs = aproposmodel::all();
        if ($aproposs->count()>0) {
            return redirect('/aproposs')->with('Non', 'l\'aujouse fait une fois!<br>Supprimer ou Modier ');
        }else{
        return view('admin/apropos/create');
        }
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
            'password' => 'required|max:300',
        ]);

        $student = aproposmodel::create($storeData);

        return redirect('/aproposs')->with('message', 'aproposs has been saved!');
    }

    /**
     *
     *  Display the specified resource.
     *
     * @param  int  $apropos_id
     * @return \Illuminate\Http\Response
     */
    public function show($apropos_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $apropos_id
     * @return \Illuminate\Http\Response
     */
    public function edit($apropos_id)
    {
        // $aproposs = aproposmodel::findOrFail($apropos_id);
        $aproposs = aproposmodel::where('apropos_id', $apropos_id)->firstOrfail();
        return view('admin/apropos/update', compact('aproposs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $apropos_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $apropos_id)
    {
        $updateData = $request->validate([
            'password' => 'required|max:255',
        ]);
        aproposmodel::where('apropos_id', $apropos_id)->update($updateData);
        return redirect('/aproposs')->with('message', 'MOdifification reussi avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $apropos_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($apropos_id)
    {
        // $aproposs = aproposmodel::findOrFail($apropos_id);
        $aproposs = aproposmodel::where('apropos_id', $apropos_id)->delete();;

        // $aproposs=aproposmodel::where('apropos_id', $apropos_id)
        //             ->update(['apropos_id' =>1]);

        return redirect('/aproposs')->with('completed', 'Student has been deleted');
    }
}

