<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function init(Request $request)
    {
        // validate hier
    }

    public function send()
    {
        return view("dashboard");
    }


}
