<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coment;
use App\Http\Requests\ComentRequest;

class ComentsController extends Controller
{
	protected $coment;

   
	public function __construct(Coment $coment)
	{

		$this->coment = $coment;
	}

	public function store(ComentRequest $request)
	{

		$this->coment->create($request->all());
		return redirect()->back();
	}	
}
