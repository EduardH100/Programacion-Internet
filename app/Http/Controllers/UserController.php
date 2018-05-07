<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	
		public function __construct()
		{
			$this->middleware('auth');
			$this->middleware('admin')->except(['show', 'index']);
		}	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
//         $usuarios = User::where('name', '!=', '')
//           ->where('email', '=', 'otro@temp.com')
//           ->with('programas', 'registros')
//           ->get();
          
        //$usuarios = User::all()->load('programas');
  
        return view('usuarios.usuariosIndex', compact('usuarios')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.usuariosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required|min:5', 
          'email' => 'required|email', 
          'password' => 'required|min:6|confirmed'
        ]);   
        $password = bcrypt($request->input('password'));
        //agrega valores a request
        $request->marge(['password' => $password]);
        //Primera forma      
        User::create($request->all());  
      
        /*
        //Segunda forma
        User::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => bcrypt($request->input('password'))
        ])
        */
      
        /*
        //Tercer forma
        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password')); //Encriptar
        
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        */
      
        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //$usuario = User::find($user);
      
        return view('usuarios.usuariosShow', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('usuarios.usuariosForm', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
          'name' => 'required|min:5', 
          'email' => 'required|email', 
          'password' => 'required|min:6|confirmed'
        ]);   
      
       // User::update($request->except('_token', 'method', 'password_confirmation'))->where('id', $user->id);
      
        $user->name = $request->input('name');
        $user->email = $request->input('emal');
        $user->password = bcrypt($request->input('password'));
        $user->save();
      
        return redirect()->action('UserController@show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->action('UserController@index');
    }
}
