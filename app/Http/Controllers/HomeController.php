<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
// use Spatie\Newsletter\Newsletter as Newsletter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function newsletterGet()
    {
        return view('newsletter');
    }

    public function newsletterPost(Request $request)
    {
        // subscribe a user
        // $result = Newsletter::subscribe($request->email);

        // subscribe a user with additional information first name and last name
        // $result = Newsletter::subscribe($request->email, ['FNAME'=>'Hasib', 'LNAME'=>'mahim', 'PHONE'=>'01566748636', 'BUSINESS'=>'Ramen Bhai']);
        // dd($result);


        //subscribe a user with additional information address
        // Newsletter::subscribe($request->email, ['ADDRESS' => (Object)[
        //     'addr1' => "House no 6b",
        //     //'addr2' => $contact->address2,
        //     'city' => "dhaka",
        //     'state' => "dhaka",
        //     'zip' => "1000",
        //     'country' => "Bangladesh",
        //     'language' => "Bnagla",
        // ],]);

        //subscribe a user with additional information phone number
        // Newsletter::subscribe($request->email, ['PHONE' => '01566748636']);

        //subscribe a user with additional information birthday
        // Newsletter::subscribe($request->email, ['BIRTHDAY' => '12/09',]);

        //subscribe a user with additional information tags
        //

        // $user = Newsletter::subscribe($request->contact, ['FNAME'=>$request->name, 'PHONE'=>$request->phone, 'BUSINESS'=>$request->username]);

        $response = Newsletter::addTags(['Trial', 'General'], $request->contact);

        dd($response);

        return back();
    }
}
