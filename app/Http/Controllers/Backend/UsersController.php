<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;



class UsersController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth:admin');
  }


  public function index()
  {
    $users = User::orderBy('id', 'desc')->get();
    return view('backend.pages.users.index')->with('users', $users);
  }

  public function delete($id)
  {
    $user = User::find($id);
    if (!is_null($user)) {
      $user->delete();
    }
    // Delete all images
    //foreach ($product->images as $img) {
      // Delete from path
      //$file_name = $img->image;
      //if (file_exists("images/products/".$file_name)) {
        //unlink("images/products/".$file_name);
      //}

      //$img->delete();
    //}
    session()->flash('success', 'User has deleted successfully !!');
    return back();

  }
}
