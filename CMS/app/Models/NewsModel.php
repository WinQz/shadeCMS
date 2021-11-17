<?php
namespace App\Models;

class NewsModel extends \CodeIgniter\Model
{

    protected $primaryKey = 'id';
    protected $table      = 'shade_news';
    protected $returnType = 'object';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
        $this->orderBy('id', 'desc');
    }
}
