<?php

namespace App\Controllers\Admin\Players;

use App\Controllers\BaseController;

class Onlinecontroller extends BaseController
{

    public function __construct() {
        $this->userModel = model('UserModel');
    }

    public function onlineUsers() {

        $onlineUsers = $this->userModel->where('online', 2)->select('username, look')->orderBy('id', 'desc')->findAll();
			
		return view('admin/players/online', ['onlineUserData' => $onlineUsers]);
		
    }

}
