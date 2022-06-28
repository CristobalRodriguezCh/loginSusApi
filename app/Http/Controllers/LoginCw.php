<?php

namespace App\Http\Controllers;

use App\Http\Requests\editProfileR;
use App\Http\Requests\LoginR;
use App\Http\Requests\ResgisterR;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginCw extends Controller
{
   
    public function login(LoginR $request){
        $credentials = $request->only('email','password');
        Auth::attempt($credentials);
        if(Auth::attempt($credentials)){//se autentican las credenciales
            //dd(Auth::attempt($credentials));
            $request->session()->regenerate();//se regenera un nuevo token csrf
            //esto para evitar una brecha de seguridad ademas que es lo mas recomentable
            //evita el robo de sesiones   
            return redirect()->route('home');         
        }
        
        return view('login.login',['errorAuth'=>'Email o contraseña invalidos']);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginView');
    }

    public function edit(editProfileR $request){

        if(!$user = User::find(Auth::user()->id)){
            return view('login.login',['errorAuth'=>'Ha sucedido un error imprevisto, por favor ingrese nuevamente']);
        }
       
        $user->name=$request->name;
        $user->email=$request->email;
        if($user->save()){
            
            return redirect()->route('profile')->with('msg','Datos actualizados');
        }
        /**
         * TO DO
         * hacer que la vista muestre un error en caso de que no se guarde
         */
    }

    public function register(ResgisterR $request){
       
        $user = User::create(array_merge(
            $request->only('name','email','password'),
            ['password'=>bcrypt($request->password)]
        ));

        if($user){
            return view('login.login',['msgSesion'=>'Se ha registrado exitosamente !!']);
        }

        return view('login.register',['errorAuth'=>'Ha sucedido un error imprevisto, por favor intente nuevamente']);
        
    }

}
