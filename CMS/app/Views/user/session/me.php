<?= $this->extend('user') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="home">
	<div class="page-content">
		<div class="left-side" style="height: auto !important;">
		<article class="default-section profile-section" style="margin-bottom: 20px;">
  <div class="background-image">
    <a href="/hotel" target="_blank" class="rounded-button white plain hotel-button enter-hotel">Ga naar <?= getenv('hotel_name') ?>
    </a>
  </div>
  <div class="profile-content">
    <div class="header-image">
      <img src="<?= getenv('hotel_url') ?>/avatar/avatarimage.php?figure=<?= $user->look; ?>" width="64" height="110" class="figure">
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
				<div class="aside-title">Welkom op <?= getenv('hotel_name') ?></div>
				<div class="related-articles-container">
					 Welkom op <?= getenv('hotel_name') ?>, <b><?= $user->username; ?></b>! <br><br>
					 ShadeCMS is een klein stabiel project gemaakt op CodeIgniter. Er zullen nog veel meer functies plaatsvinden door loop van de tijd.
				 </div>
			</article>
		</div>
	<br>
<div class="articles-container">
	<?php foreach($newsData as $news): ?>
      	<div class="article-container">
          	<a href="/news/<?= $news->id ?>" class="article-content pixelated" style="background-image: url(<?= $news->image ?>);">
                <div class="article-header">
                    <div class="article-category"><?= $news->title ?></div>
                    <div class="article-separation" style="background-color: cyan;"></div>
                    <div class="article-title title" data-id="2" style=""><?= $news->shortstory ?></div>
                </div>
            </a>
        </div>
	<?php endforeach; ?>
	</div>
</div>

<?= $this->endSection() ?>
