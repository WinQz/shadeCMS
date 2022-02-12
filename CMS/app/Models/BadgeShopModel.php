<?php
namespace App\Models;

use CodeIgniter\Model;

class BadgeShopModel extends Model {

    protected $primaryKey = 'id';
    protected $table = 'shade_badgeshop';
    protected $returnType = 'object';

    protected $allowedFields = ['id', 'badge_code', 'price'];

}