<?= $this->extend('user') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="profile">
	<header class="page-header flex-container flex-vertical-center">
		<div class="page-header-content">
			<h1>Profiel van <?= $userData->username; ?> </h1> </div>
	</header>
	<div class="page-content">
		<div class="left-side">
			<aside class="default-section">
				<div class="profile-header">
					<div class="header-content flex-container flex-vertical-center"> <img src="https://habbo.com/habbo-imaging/avatarimage?figure=<?= $userData->look; ?>&amp;direction=2&amp;gesture=sml&amp;size=l" class="pixelated">
						<div class="header-details">
							<div class="header-title"><?= $userData->username ?> </div>
							<div class="header-description"><?= $userData->motto; ?></div>
						</div>
					</div>
				</div>
				<div class="profile-content">
					<div class="details-container register"><?= getenv('hotel_name') ?> sinds <b><?php $dateRegister = date('d-m-Y H:i:s', $userData->account_created); echo $dateRegister; ?></b></div>
					<div class="details-container last_login">Laatste bezoek <strong><?php $dateLastOnline = date('d-m-Y H:i:s', $userData->last_online); echo $dateLastOnline; ?></strong></div>
					<div class="details-container status">Momenteel <?php if ($userData->online) {echo '<strong class="online">online</strong></div>';} else {echo '<strong class="offline">offline</strong></div>';} ?>
				</div>
			</aside>
			<article class="default-section">
				<h3 class="aside-title">
Mijn informatie
<span><a class="feedCount" style="text-decoration: none; color:#000"></a></span><a class="feedCount" style="text-decoration: none; color:#000">
</a></h3>
				<a class="feedCount" style="text-decoration: none; color:#000">
					<div class="form-group has-feedback"> <b></b>
						<p> Ik heb <b><?= $userData->credits; ?></b> Credits!</p>
						<p> Ik heb <b><?= $userData->pixels; ?></b> Duckets!</p>
						<p> Ik heb <b><?= $userData->points; ?></b> Diamanten!</p>
					</div>
					<div class="profile-content">
						<div class="feeds"> </div>
			</article>
			<a class="feedCount" style="text-decoration: none; color:#000"> </a>
		</div>
		<a class="feedCount" style="text-decoration: none; color:#000">
			<div class="right-side">
				<div class="badges"></div>
				<article class="default-section" data-section="badges">
					<h3 class="aside-title">Badges
<span> van <?= $userData->username; ?></span>
</h3>
					<div class="items-container">Soon</div>
				</article>
				<div class="friends"></div>
				<article class="default-section" data-section="friends">
					<h3 class="aside-title">
Vrienden 
<span> van <?= $userData->username; ?></span> 
</h3>
					<div class="items-container">Soon</div>
				</article>
			</div>
		</a>
	</div>
</section>

<?= $this->endSection() ?>