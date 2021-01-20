<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function init(Request $request)
    {
        $this->validate($request);
    }

    public function validate(Request $request)
    {
        $request->file('photo');

    }


}
