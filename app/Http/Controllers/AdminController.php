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
    public function getLogin()
    {
        return view('membership.login');
    }
    public function postLogin(Request $request)
    {
       $this->validate($request,[
            'username'=>'required|max:255',
            'password'=>'required|min:3|max:32'
       ],[
           'username.required'=>'Bạn chưa nhập Username',
           'username.max'=>'Username không được lớn hơn 255 ký tự',
           'password.required'=>'Bạn chưa nhập password',
           'password.min'=>'Password không được nhỏ hơn 3 ký tự',
           'password.max'=>'Password không được lớn hơn 32 ký tự'
       ]);
        $credentials = [
            'username'=>$request['username'],
            'password'=>$request['password'],
        ];
        if(Auth::attempt($credentials)){
            return redirect('/admin/home/index');
        }
        return redirect()->back()->with('message','Đăng nhập không thành công');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
