<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UsersController extends Controller
{
    public function show_users(){
        $sp=DB::table('users')->get();
    	return view('admin.users.users')->with('sp',$sp);
    }

    public function them_users(Request $request){
        if($request->hoten){
            
        DB::table('users')->insert([
            'Hoten' => $request->hoten,
            'Email' => $request->email,
            'Password' => $request->password,
            'Chucvu' => $request->chucvu,
        ]);
        return redirect('/users');
        }
        return view('admin.users.them');
    }

    public function getSua($id){
        $users = DB::table('users')->where('id', $id)->first();
      return view('admin.users.sua', ['users'=>$users]);

    }

    public function postSua(Request $request, $id){
        DB::table('users')->where('id', $id)->update([
            'Hoten' => $request->Hoten,
            'Email' => $request->Email,
            'Password' => $request->Password,
            'Chucvu' => $request->Chucvu,
        ]);
            return redirect('/users');
    }

    public function xoa_users($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/users');
    }

    public function hienthi_users($id){
        $users = DB::table('users')->where('id', $id)->first();
      return view('admin.users.hienthi', ['users'=>$users]);

    }

}
