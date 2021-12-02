<?php
namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model {

    protected $primaryKey = 'id';
    protected $table = 'shade_news';
    protected $returnType = 'object';

    protected $allowedFields = ['id', 'title', 'shortstory', 'longstory', 'image', 'author'];

}
