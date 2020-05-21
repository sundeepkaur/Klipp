<?php


namespace App;
namespace App\Http\Controllers;

use App\Contact;
use App\UserRole;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactUsController extends Controller
{
    public function index(){
        return view('public-interface.public-contactUs');
    }

    public function create(){
        return view('public-interface.public-contactUsForm');
    }

    public function store(Request $request){

        $this->validate($request, [
            'fname' => 'required|string|max:100',
            'lname' => 'required|string|max:100',
            'email' => 'required|email|max:500',
            'comment' => 'required|string|max:500',
        ]);
        $contacts = new Contact();
        $contacts -> first_name = $request->fname;
        $name = $request->fname;
        $contacts -> last_name = $request->lname;
        $contacts -> email = $request->email;
        $contacts -> comment = $request->comment;
        $contacts ->save();

        $contacts = DB::table('contact')->where('first_name',$name)->get();
        if(isset($contacts)){
            return view('public-interface.public-contactForm', compact('name'));
        }
    }
}
