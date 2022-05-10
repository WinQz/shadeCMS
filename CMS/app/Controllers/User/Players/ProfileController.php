<?php
namespace App\Controllers\User\Players;

use App\Controllers\BaseController;

class Profilecontroller extends BaseController
{

    public function __construct() {
        $this->userModel = model('UserModel');
        $this->badgesModel = model('BadgeModel');
		$this->reportModel = model('ReportModel');
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
	
	public function reportPlayer($username) {
		
		$rules = [
			'reason' => 'max_length[25]|required|min_length[10]'
        ];
		
		$user = $this->userModel->where('id', $this->session->get('user')->id)->first();
		$userProfile = $this->userModel->where('username', $username)->first();
		
		$errors = service('validate')->run($this->validate($rules));
        if($errors) {
            return redirect()->back()->with('errors', $errors);
        }
		
		if(!$user) {
            return redirect()->back()->with('errors', lang('Je moet ingelogd zijn om te gaan rapporteren'));
        }
		
		$data = [
            'reporter_id'  => $user->id,
            'reporter_name'      => $user->username,
            'report_context'  => $this->request->getVar('reason', FILTER_SANITIZE_STRING),
            'reported_id'     => $userProfile->id,
            'reported_name' => $userProfile->username
        ];
		
		
		
		$this->reportModel->insert($data);
		return redirect()->back()->with('success', lang('Player reported with success'));
	}

}