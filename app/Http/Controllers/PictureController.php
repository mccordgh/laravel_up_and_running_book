<?php

namespace LaravelUpAndRunning\Http\Controllers;

use Illuminate\Http\Request;

class PictureController extends Controller
{
   public function create(Request $request)
   {
       $title = $request->input('title');

       if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
           $path = $request->picture->storeAs('profiles', 'profile_pic.png');
           move_uploaded_file($request->picture, 'profiles/profile_pic.png');
       }

      return view('picture')->with([
          'title' => $title,
          'path' => $path
      ]);
   }
}
