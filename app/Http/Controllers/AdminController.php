<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.admin_login');
    }

    public function login(Request $request)
    {
        $admin_email = $request->txt_Email;
        $admin_password = md5($request->txt_Password);

        $result = DB::table('admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return view('backend.admin_layout');
        } else {
            Session::put('message', 'Wrong account or password please re-enter');
            return view('backend.admin_login');
        }
    }

    public function logout()
    {
        return view('backend.admin_login');
    }
}
