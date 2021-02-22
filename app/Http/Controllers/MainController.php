<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showStart()
    {
      //passing one variable into view
      //return view('master')->withListOne('Laravel Magic method.');
      $text = "that is some text";
      return view('master')->withListOne('ListOne')->withListTwo('ListTwo')
      ->withListThree("ListThree")->withListFour("ListFOur")->withParagraphOne($text)
      ->withParagraphTwo("something");


    }
}
