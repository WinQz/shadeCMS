<?= $this->extend('admin') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="help">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1><?= getenv('hotel_name') ?> Admin Panel
      </h1>
      View all the reports
    </div>
  </header>
  <div class="page-content">
    <div class="left-side">
      <article class="default-section">
        <h3 class="aside-title">Report Logs
        </h3>
        <h4>Check all the submitted Reports
        </h4>
		<table style="width:100%">
		  <tr>
			<th>ID</th>
			<th>Reported User</th>
			<th>Reden</th>
			<th>Door</th>
		  </tr>
        <?php foreach($reportData as $reportFetchData): ?>
		
		  <tr>
			<td><?= $reportFetchData->id ?></td>
			<td><?= $reportFetchData->reported_name ?></td>
			<td><?= $reportFetchData->report_context ?></td>
			<td><?= $reportFetchData->reporter_name ?></td>
		  </tr>

		<?php endforeach; ?>
		</table>
        </p>
      </article>
    </div>
    <div class="right-side">
      <aside class="default-section">
        <h3 class="aside-title">Report Logs
        </h3>
        <p>
            All user reports will be fetched in here.
        </p>

      </aside>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
