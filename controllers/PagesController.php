<?php
/*
* This Class is responsible
* For return requested views or pages
*/
class PagesController
{
  public function home()
  {
    //load the view. param1 view name, param2 data
    $data =[
      "title" => "Home"
    ];
    return view('home',compact('data'));
  }
  public function about()
  {
    $data =[
      "title" => "About"
    ];
    return view('about',compact('data'));
  }
  public function contact()
  {
    $data =[
      "title" => "Contact",
      "owner" => "H.R.Shadhin"
    ];
    return view('contact',compact('data'));
  }
}
