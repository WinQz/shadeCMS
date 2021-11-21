<?php
namespace App\Controllers\Players;

use App\Controllers\BaseController;

class Profilecontroller extends BaseController
{

    public function __construct() {
        $this->userModel = model('UserModel');
    }

    public function getProfile($username) {
      
        $userProfile = $this->userModel->where('username', $username)->first();
        if(!$userProfile) {
            return redirect()->back()->with('errors', lang('User Not Found'));
        }
      
        echo view('players/profile', ['userData' => $userProfile]);
    }

}
