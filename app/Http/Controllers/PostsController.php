<?php
/**
 * Created by PhpStorm.
 * User: mauronunes
 * Date: 05/04/2018
 * Time: 10:38
 */

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where('id', 1)
            ->get();

        return response()->json($posts);
    }
}
