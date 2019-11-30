<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Post::orderBy( 'id', 'DESC' )->paginate();
        
    }

    /**
     * Función para mostrar la información del post
     */
    public function show( $slug )
    {

        return Post::where( 'slug', $slug )->first();

    }

}
