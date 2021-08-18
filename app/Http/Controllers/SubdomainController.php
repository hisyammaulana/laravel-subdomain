<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SubdomainController extends Controller
{
    private $subdomain;

    public function __construct(Request $request) 
    {
        $this->subdomain = $request->subdomain;
    }

    public function subdomain()
    {
        $user = User::where('subdomain', $this->subdomain)->first();

        if ($user == null) {
            return view('404');
        }

        return view('subdomain')->with('user', $user);
    }
}
