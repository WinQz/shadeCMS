<?php 
namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model {
    
    protected $primaryKey = 'id';
    protected $table = 'permissions';
    protected $returnType = 'object';

    protected $allowedFields = ['id', 'rank_name', 'badge'];

}