<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

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
          return redirect('/admin')->with('PesanError','Username atau Password Salah');
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
      $adminDetails = User::where(['id'=>1])->first();
      return view('admin.settings')->with(compact('$adminDetails'));
    }

    public function chkPassword(Request $request)
    {
      $data = $request->all();
      $current_password = $data['current_pwd'];
      $check_password = User::where(['admin'=>'1'])->first();

      if(Hash::check($current_password,$check_password->password)) {
        echo "true"; die;
      }else {
        echo "false"; die;
      }
    }

    public function updatePassword(Request $request)
    {
      if($request->isMethod('post')) {
        $data = $request->all();
        $check_password = User::where(['email'=>Auth::user()->email])->first();
        $current_password = $data['current_pwd'];
        if(Hash::check($current_password,$check_password->password)) {
          $password = bcrypt($data['new_pwd']);
          User::where('id','1')->update(['password'=>$password]);
          return redirect('/admin/settings')->with('PesanSukses','Password Berhasil di Update');
        }else {
          return redirect('/admin/settings')->with('PesanError','Terjadi Kesalahan!! Password Gagal di Update');
        }
      }
    }


    public function logout()
    {
      Session::flush();
      return redirect('/admin')->with('PesanSukses','Berhasil Keluar');
    }
}
