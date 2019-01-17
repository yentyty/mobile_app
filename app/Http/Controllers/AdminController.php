<?php

namespace Mobile\Http\Controllers;

use Illuminate\Http\Request;
use Mobile\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getlogin()
    {
        return view('membership.login');
    }
    public function postlogin(Request $request)
    {
        $credentials = [
            'username'=>$request['username'],
            'password'=>$request['password'],
        ];
        if(Auth::attempt($credentials)){
            return redirect('/admin/home/index');
        }
        return redirect()->back();
    }
}
