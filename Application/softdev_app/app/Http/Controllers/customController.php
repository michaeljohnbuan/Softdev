<?php
namespace App\HTTP\Controllers;
use Illuminate\Routing\Controller as BaseController;


/**
* 
*/
class customController extends BaseController
{
	
	function index()
	{
		return view('index');
	}

	function about()
	{
		return view('about');
	}

	function blog()
	{
		return view('blog');
	}

	function contact()
	{
		return view('contact');
	}

	function portfolio()
	{
		return view('portfolio');
	}

	function request_food()
	{
		return view('request_food');
	}

	function request_utensils()
	{
		return view('request_utensils');
	}

	function search_alternatives()
	{
		return view('search_alternatives');
	}

	function single_post()
	{
		return view('single_post');
	}

	function single_project()
	{
		return view('single_project');
	}
}

?>