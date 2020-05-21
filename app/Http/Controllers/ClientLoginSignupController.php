<?php

namespace App\Http\Controllers;

use App\UserRole;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClientLoginSignupController extends Controller
{
    public function index(){
        return view('admin.admin-activities');
    }

    public function create(){
        return view('public-interface.public-home');
    }

    public function add(){
        return view('admin.admin-addProduct');
    }

    public function modify(){
        return view('admin.admin-modifyProduct');
    }

    public function delete(){
        return view('admin.admin-deleteProduct');
    }
    public function store(Request $request){

       $this->validate($request, [
            'name' => 'required|min:3|string|max:100',
            'password' => 'required|max:8|',
            'email' => 'required|email|max:100',
            'address' => 'required|string|max:500',
            'phone' => 'required|numeric',
            'postal_code' => 'required|max:6'
        ]);
        $user = new User();
        $user -> name = $request->name;
        $user ->password = $request->password;
        $user -> email = $request->email;
        $user -> address = $request->address;
        $user -> new_password = $request->password;
        $user -> phone = $request->phone;
        $user -> created_at = 1;
        $user -> is_deleted = 0;
        $user -> postal_code = $request->postal_code;
        $user ->save();

        $id = DB::table('user')->where('name', $request->name)->first();
        $user_role = new UserRole();
            //$user_role -> user_id = $id->id;
            //$user_role -> role_id = 1;
            //$user_role -> save();
            return redirect('clients');
    }

    public function login(Request $request){
        $users = User::all();

        foreach ($users as $user) {
            if ( $user->email == $request->get('email') && $user->password == $request->get('password')) {
                return redirect('clients');
            }
        }
    }
}
