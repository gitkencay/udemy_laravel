<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UdemyController extends Controller
{
    public function index(){
        return "Hello World";
    }

    public function addPost() {
        return View('addpost');
    }

    public function createPost(Request $request) {
        $post = $request->post;
        return $post;
    }
}
