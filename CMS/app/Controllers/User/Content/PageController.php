<?php

namespace App\Controllers\User\Content;

use App\Controllers\BaseController;

class PageController extends BaseController
{

    public function terms() {

		return view('user/content/information/terms');

    }

    public function rules() {

		return view('user/content/information/rules');

    }

    public function privacy() {

		return view('user/content/information/privacy');

    }

    public function value() {

		return view('user/content/values/value');

    }

    public function secondvalue() {

		return view('user/content/values/secondvalues');

    }

}
