<?php

namespace App\Http\Databases;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionAuthentication
{
    public function authentication(Request $request){
        $username = trim($request->username);
        $password = $request->password;

        $count = DB::table("users")->where("username", $username);

        if(!$count){
            return redirect("login")->with("message", "Username oder Passwort falsch!");
        }

        $passwordHash = DB::table("users")->select("password")->where("username", $username)->get();

        foreach($passwordHash as $passwordHash) $passwordHash = $passwordHash->password;

        if(!password_verify($password, $passwordHash)){
            return redirect("login")->with("message", "Username oder Passwort falsch!");
        }

        session()->put("active", true);
        return redirect("dashboard");
    }
    
    public function logout(){
        if(session()->has("active")){
            session()->forget("active");
        }

        return redirect("login");
    }

    public function getSession(){
        if(session()->has("active")){
            return redirect("dashboard");
        }

        return view("login");
    }
}
