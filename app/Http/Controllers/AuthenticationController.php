<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Authentication;

class AuthenticationController extends Controller
{
    public function create(Request $request){

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|',
            'password' => 'required|max:8',
            'phone' => 'required|min:10|max:10',
        ]);


        Authentication::create($request->all());

        return redirect('home');

    }

    public function login(Request $request){

        /*
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',

        ]);
        */

        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        /*
        if (Authentication::attempt($request)) {
            echo 'SUCCESS!';
        }

        $credentials = $request->only('email', 'password');
        if (Authentication::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }
        */

        $user_exists =  Authentication::where('email',$request['email'])->where('password', $request['password']);
        //dump($user_exists->password);
        try{
            if($user_exists->firstOrFail()){


                //$value = $request->session()->pull('name', '$user_exists.first_name');
                //dump($user_exists);
                $user_object = $user_exists->first();
                session(['first_name' => $user_object->first_name]);
                return redirect('shoppingList');
            }else{
                return redirect('/home');

            }
        }catch(\Exception $e){
            return redirect('/home');
        }



    }

    public function logout(Request $request){

        //$request->session()->forget('name');
        $request->session()->flush();
        return redirect('home');

    }
}
