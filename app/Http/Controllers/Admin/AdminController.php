<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function dashboard()
        {
            return view('admin.dashboard');
        }

        public function profile()
        {
            return view('admin.profile.index');
        }
        public function editprofile()
        {
            return view('admin.profile.edit');
        }

        public function mywallet()
        {
            $wallet = auth()->user()->wallet;
            return view('admin.profile.mywallet',compact('wallet'));
        }
}
