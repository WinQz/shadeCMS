<?php
namespace App\Models;

use CodeIgniter\Model;

class BadgeModel extends Model {

    protected $primaryKey = 'id';
    protected $table = 'users_badges';
    protected $returnType = 'object';

    protected $allowedFields = ['id', 'user_id', 'slot_id', 'badge_code'];

}
