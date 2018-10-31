<?php

namespace App\Http\Controllers\Merchant;

use App\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $redirectTo = '/merchant/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('merchant.auth:merchant');
    }

    /**
     * Show the Merchant dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('merchant.home');
    }

    public function show() 
    {
        return view('merchant.advertisement');
    }


    public function store(Request $request,Advertisement $adv) 
    {


        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $image)
            {

                $name=time().'.'.$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data = $name;
                $adv->filename=$data;
                $adv->title=$request->title;
                $adv->price=$request->price;
                $adv->number=$request->number;
                $adv->description=$request->description;
                $adv->save();
            }

        }

        return back()->with('success', 'Your details has been successfully uploaded');
        
    }

}