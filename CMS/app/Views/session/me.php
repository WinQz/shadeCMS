<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="home">
	<div class="page-content">
		<div class="left-side" style="height: auto !important;">
		<article class="default-section profile-section" style="margin-bottom: 20px;">
  <div class="background-image">
    <a href="/clienthtml" target="_blank" class="rounded-button white plain hotel-button enter-hotel">Ga naar Yabbis
    </a>
  </div>
  <div class="profile-content">
    <div class="header-image">
      <img src="https://habbo.com/habbo-imaging/avatarimage?figure=<?= $user->look; ?>" width="64" height="110" class="figure">
    </div>
    <div class="stats">
      <div class="icons" style="background: url(/assets/images/hotel/purses/credits-icon.png) no-repeat center center;">
      </div>
      <div style="color: #E2AE1D;">
        <?php echo $user->credits; ?>
      </div>
      <div class="icons" style="background: url(/assets/images/hotel/purses/0-icon.png) no-repeat center center;">
      </div>
      <div style="color: #BA7CC2;">
	  <?= $user->pixels; ?>
      </div>
      <div class="icons" style="background: url(/assets/images/hotel/purses/diamonds-icon.png) no-repeat center center;">
      </div>
      <div style="color: #6caff4;">
	  <?= $user->points; ?>
      </div>
    </div>
  </div>
</article>

		</div>
		<div class="right-side">
			<article class="default-section">
				<div class="aside-title">Welkom op ShadeCMS </div>
				<div class="related-articles-container">
					 Welkom op Yabbis, <b><?= $user->username; ?></b>! <br><br>
					 ShadeCMS is een klein stabiel project gemaakt op CodeIgniter. Er zullen nog veel meer functies plaatsvinden door loop van de tijd.
				 </div>
			</article>

		</div>
	</div>
<?= $this->endSection() ?>
