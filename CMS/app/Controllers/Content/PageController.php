<?php

namespace App\Controllers\Content;

use App\Controllers\BaseController;

class PageController extends BaseController
{

    public function terms() {

		echo view('content/information/terms');

    }

    public function rules() {

		echo view('content/information/rules');

    }

    public function privacy() {

		echo view('content/information/privacy');

    }

    public function value() {

		echo view('content/values/value');

    }

    public function secondvalue() {

		echo view('content/values/secondvalues');

    }

}
