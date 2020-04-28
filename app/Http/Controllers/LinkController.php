<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
  public function index() {
    /*
    $links = \App\Link::all();
    */
    $links = DB::select('SELECT * FROM LINKS ORDER BY id DESC');
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
    上記は以下に対するシンタックスシュガー
    $link = new \App\Link();
    $link->url = $request->url;
    $link->title = $request->title;
    $link->description = $request->description;
    $link->save();
    */

    return redirect('/');
  }

  public function destroy($id) {
    $link = \App\Link::findOrFail($id);
    $link->delete();

    return redirect('/');
  }
}
