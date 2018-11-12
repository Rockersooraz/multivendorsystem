<?php

namespace App\Http\Controllers\Merchant;

use App\Advertisement;
use App\Category;
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
        $arr['category']=Category::all();
        return view('merchant.advertisement')->with($arr);
    }


    public function store(Request $request,Advertisement $adv) 
    {


        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('filename'))
        {
            // $images = implode(',', $request->file('filename'));

            // print_r($images);
            $images = array();
            foreach($request->file('filename') as $image)
            {

                $name= $image->getClientOriginalExtension();
                $new_name = rand(012345,9999999).'.'.$name;
                $image->move(public_path().'/images/', $new_name);
                $data = $new_name;
                $images[] = $new_name;
            }

            $final_img = implode(',', $images);
            $adv = new Advertisement;
            $adv->filename=$final_img;
            $adv->title=$request->title;
            $adv->price=$request->price;
            $adv->number=$request->number;
            $adv->description=$request->description;
            $adv->save();
           

        }

        return back()->with('success', 'Your details has been successfully uploaded');
        
    }

}