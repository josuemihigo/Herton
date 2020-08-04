<?php

namespace App\Http\Controllers;

use App\admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

   /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected function validator(array $data){

         return Validator::make($data, [
            'name1' => ['required', 'string', 'max:255'],
            'name2' => ['required', 'string', 'max:255'],
            'numTel' => ['required', 'sting','min:9', 'max:13'],
            'numCart' => ['required', 'string', 'min:5', 'max:255'],
            'pin' => ['required', 'sting','max:255'],
            'parrain' => ['required', 'string'],
            'role' => ['required', 'string', 'max:1'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);
     }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(request $data){

       $password1 = request('name1').''.request('name2');
       $pin = 'PBHR-'.date("Y-m-d H:i").'-DT';

       if(request('parrain') == 'PBHR-001-DT' || User::where('pin', request('parrain'))->exists()){
            $parrain = request('parrain');
       }else{
            return redirect('/newUser')->with('Erreur', 'article has not been saved!'); 
       }
        $hh = User::create([
            'name1' => $data['name1'],
            'name2' => $data['name2'],
            'numTel' => $data['numTel'],
            'numCart' => $data['numCart'],
            'pin' => $pin,
            'parrain' => $parrain,
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($password1)
        ]);

        return redirect('/newUser')->with('completed', 'article has been saved!');
    }

     public function newUser(){
        return view('admin/admin/newUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }

}
