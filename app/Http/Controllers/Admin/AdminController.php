<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Merchant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$arr['merchant']=Merchant::all();
    	return view('Vendor.Merchant.index')->with($arr);


    }
}
