<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Links;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class SpringController extends CommonController
{
    //前台首页
    public function index()
    {

	    return view('web.spring.index');
    }

    //
    public function info()
    {
    	return view('web.spring.info');
    }

    public function shark()
    {
        return view('web.spring.shark');
    }


    public function question()
    {
        return view('web.spring.question');
    }
    public function questionList()
    {
        return view('web.spring.questionList');
    }






}
