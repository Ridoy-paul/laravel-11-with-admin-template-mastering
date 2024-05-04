<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function index()
    {
        try {
            return view('admin.pages.dashboard.home');
        } 
        catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }

    public function profile()
    {
        try {
            return view('admin.pages.profile.index');
        } 
        catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }

    




}
