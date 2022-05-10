<?php
namespace App\Controllers\User\Shop;

use App\Controllers\BaseController;

class BadgeShopController extends BaseController
{

    public function __construct() {
        $this->badgeShopModel = model('BadgeShopModel');
        $this->session = \Config\Services::session();
        $this->userModel = model('UserModel');
        $this->badgeModel = model('BadgeModel');
    }

    public function getBadges() {
      
        $shopBadges = $this->badgeShopModel->findAll();
  
        return view('user/shop/badgeshop', ['shopBadges' => $shopBadges]);
    }
	
	public function getSessionId() {
		
		$userId = $this->session->get('user')->username;
		
		return $userId;
	}

    public function buyBadge($badgeCode) {

        $user = $this->userModel->where('username', $this->session->get('user')->username)->first();

        $badgePurchase = $this->badgeShopModel->where('badge_code', $badgeCode)->first();

        $purchase = [
            'user_id'     =>  $this->getSessionId,
            'badge_code'  => $badgeCode,
        ];
        
        $checkAlreadyOwned = $this->badgeModel->where($purchase)->findAll();

        if (!$badgePurchase) {
            return redirect()->back()->with('errors', lang('This badge is not even in the shop'));
        }

        if (!$user->online) 
        {
            if ($user->points > $badgePurchase->price && !$checkAlreadyOwned)
            {
                $mathOperator = $user->points - $badgePurchase->price;
                $this->badgeModel->insert($purchase);
                $this->userModel->update($user->id, ['points' => $mathOperator]);
                return redirect()->back()->with('success', lang('Succesfully bought the badge'));
            }
            return redirect()->back()->with('errors', lang('Not enough diamonds or you already have this badge'));
        }
        return redirect()->back()->with('errors', lang('You first need to be offline to purchase a badge.'));
    }
}