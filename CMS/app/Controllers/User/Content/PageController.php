<?php

namespace App\Controllers\User\Content;

use App\Controllers\BaseController;

class PageController extends BaseController
{

    public function terms() {

		echo view('user/content/information/terms');

    }

    public function rules() {

		echo view('user/content/information/rules');

    }

    public function privacy() {

		echo view('user/content/information/privacy');

    }

    public function value() {

		echo view('user/content/values/value');

    }

    public function secondvalue() {

		echo view('user/content/values/secondvalues');

    }

}
