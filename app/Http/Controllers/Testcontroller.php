<?php
namespace App\Http\controllers;
use Illuminate\Http\Request;
class TestController extends Controller 
{
	public function welcome (){
	return view ("welcome");
	}
}