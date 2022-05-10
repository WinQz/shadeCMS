<?= $this->extend('admin') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="help">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1><?= getenv('hotel_name') ?> Admin Panel
      </h1>
      Login into one of the players account.
    </div>
  </header>
  <div class="page-content">
    <div class="left-side">
      <article class="default-section">
        <h3 class="aside-title">User Client Login
        </h3>
		<table style="width:100%">
		  <tr>
			<th>ID</th>
			<th>Username</th>
			<th>Login</th>
		  </tr>
        <?php foreach($userData as $userDataFetchData): ?>
		
		  <tr>
			<td width="10%"><?= $userDataFetchData->id ?></td>
			<td width="30%"><?= $userDataFetchData->username ?></td>
			<td width="30%"><a href="https://<?= getenv('hotel_url') ?>/nitro/index.html?sso=<?= $userDataFetchData->auth_ticket ?>" target="_blank"><button class="rounded-button gray">Login</button></a></td>
		  </tr>

		<?php endforeach; ?>
		</table>
        </p>
      </article>
    </div>
    <div class="right-side">
      <aside class="default-section">
        <h3 class="aside-title">Login Section
        </h3>
        <p>
            As staff member you can login into user accounts. But only with the right reason or permission.
        </p>

      </aside>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
