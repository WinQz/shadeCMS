<?php
namespace Config;

use CodeIgniter\Config\Services as CoreServices;
use CodeIgniter\Config\BaseConfig;
use Daycry\Doctrine\Doctrine;


require_once SYSTEMPATH . 'Config/Services.php';

class Services extends CoreServices
{
    public static function validate($getShared = true) {
        if ($getShared){
            return static::getSharedInstance('validate');
        }
        return new \App\Libraries\Validate;
    }
}
