<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function login() {
        return view('pages.login');
    }
    public function dashboard() {
        return view('dashboard');
    }
    public function customer() {
        return view('pages.customer');
    }
    public function product() {
        return view('pages.product');
    }
    public function sales() {
        return view('pages.sales');
    }
}
