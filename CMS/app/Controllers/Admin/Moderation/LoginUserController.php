<?php
namespace App\Controllers\Admin\Moderation;

use App\Controllers\BaseController;

class Loginusercontroller extends BaseController
{

    public function __construct() {
        $this->userModel = model('UserModel');
       }

    public function getUsers() {
      
        $users = $this->userModel->select('id, username, auth_ticket')->where('rank', 1)->findAll();
      
        return view('admin/moderation/login', 
        ['userData' => $users]);
    }

}

