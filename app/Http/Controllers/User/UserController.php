<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public  function __construct() {
        $this->user = new User;
    }
    public function getSignup()
    {
        return view("User.signup");
    }
    public function postSignup(Request $request)
    {
        $this->validate($request,$this->user->rules);
        if($request->input("password") == $request->input("confirm") ){
            $result =      $this->user->create([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "password" => bcrypt($request->input("password"))                              
                ]);
            if($result){
                echo "Registro realizado com sucesso.";
                redirect()->route("home");
            }  
            else {
                return view("User.signup", ["fail" => "Erro ao cadastrar"])    ;
            }            
        }
        else{
            return view("User.signup", ["fail" => "Campo de Senha e Confirmação devem ser iguais"])    ;
        }
    }
    public function getLogin()
    {
        return view("User.signin");
    }
    
    public function login(Request $request)
    {      
        
        if(Auth::attempt(["email" => $request->input("email") , "password" => $request->input("password") ]) ){
            echo "Deu certo";
            return redirect()->route("home");
        }
        else{
            echo "Deu errado";
            return view("User.signin", ["fail" => "Email ou senha incorretos"]);
        }        
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }
    
}
