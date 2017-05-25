<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coment;

class ComentsController extends Controller
{
    public function store(Request $request)
    {
    	protected $coment;
    	public function __construct(Coment $coment){

    		$this->coment = $coment;
    	}

    	public function store(PostsRequest $request){

    		$this->coment->create($request = all());
    		return redirect()->back();
    	}	
    }
}
