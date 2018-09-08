<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AdminController extends Controller
{
    public function login(Request $request)
    {
      if($request->isMethod('post')){
        $data=$request->input();
        if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])) {
          return redirect('/admin/dashboard');
        }else {
          echo "Failed";
          return redirect('/admin')->with('PesanAktivitas','Username atau Password Salah');
        }
      }
      return view('admin.admin_login');
    }

    public function dashboard()
    {
      return view('admin.dashboard');
    }

    public function settings()
    {
      return view('admin.settings');
    }


    public function logout()
    {
      Session::flush();
      return redirect('/admin')->with('PesanAktivitas','Berhasil Keluar');
    }
}
