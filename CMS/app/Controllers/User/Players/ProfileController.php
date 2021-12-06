<?php
namespace App\Controllers\User\Players;

use App\Controllers\BaseController;

class Profilecontroller extends BaseController
{

    public function __construct() {
        $this->userModel = model('UserModel');
        $this->badgesModel = model('BadgeModel');
        }

    public function getProfile($username) {
      
        $userProfile = $this->userModel->where('username', $username)->first();
        if(!$userProfile) {
            return redirect()->back()->with('errors', lang('User Not Found'));
        }

        $getUserBadges = $this->badgesModel->where('user_id', $userProfile->id)->findAll();
      
        return view('user/players/profile', 
        ['userData' => $userProfile,
         'badgesData' => $getUserBadges]);
    }

}