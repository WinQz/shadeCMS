<?php
namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model {

    protected $primaryKey = 'id';
    protected $table = 'shade_reports';
    protected $returnType = 'object';

    protected $allowedFields = ['id', 'reporter_id', 'reporter_name', 'report_context', 'reported_id', 'reported_name'];

}
