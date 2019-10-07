<?php
# @Date:   2019-10-07T19:07:38+01:00
# @Last modified time: 2019-10-07T19:08:43+01:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
}

public function hello()
{
  return view('hello');
}
