<?php

namespace App\Controllers\Admin\Moderation;

use App\Controllers\BaseController;

class Reportcontroller extends BaseController
{

    public function __construct() {
        $this->reportModel = model('ReportModel');
    }

    public function reportLogs() {

        $reportLogs = $this->reportModel->select('id, reporter_id, reporter_name, report_context, reported_id, reported_name')->orderBy('id', 'desc')->findAll();

		return view('admin/moderation/reports', ['reportData' => $reportLogs]);

    }

}
