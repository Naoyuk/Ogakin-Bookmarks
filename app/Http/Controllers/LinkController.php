<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
  public function index() {
    $links = \App\Link::all();
    return view('links', compact('links'));
  }

  public function new() {
    return view('submit');
  }

  public function store(Request $request) {
    $data = $request->validate([
      'title' => 'required|max:255',
      'url' => 'required|url|max:255',
      'description' => 'required|max:255',
    ]);

    $link = tap(new \App\Link($data))->save();
    /*
    上記は以下のワンライナー
    $link = new \App\Link();
    $link->url = $request->url;
    $link->title = $request->title;
    $link->description = $request->description;
    $link->save();
    */

    return redirect('/');
  }
}
