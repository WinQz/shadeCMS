<?= $this->extend('user') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="profile">
	<header class="page-header flex-container flex-vertical-center">
		<div class="page-header-content">
			<h1>Profiel van <?= $userData->username; ?> </h1> </div>
	</header>
	<style>
	#report-modal-popup {
		display: none;
		position: fixed; 
		z-index: 1;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto; 
		background-color: rgb(0,0,0); 
		background-color: rgba(0,0,0,0.8); 
	}
	
	#login-dialog {
		margin: 15% auto;
		position: relative;
	}
	
	.close {
		cursor: pointer;
	}
	
	</style>
	<div id="report-modal-popup">
	<div id="login-dialog" class="login-popup zoom-anim-dialog">
            <h3 class="aside-title">Rapporteer <?= $userData->username ?><span class="close">Close</span>
            </h3>
			
			
          <form method="POST" action="/report/<?= $userData->username ?>">
            <div class="login-form">
              <label for="login-password-input-target" class="password-input">
                <input type="text" name="reason" class="rounded-input blue-active" id="login-password-input-target" placeholder="Reden voor report..." autocomplete="off" required="">
                <i class="flaticon-user">
                </i>
              </label>
              <button type="submit" class="rounded-button blue plain" id="login-request">Rapporteer
              </button>
			  <p style="color: lightgray;">Je mag geen valse reports insturen. Als dit gebeurd zijn de gevolgen voor je account.<p>
            </div>
          </form>
          </div>
		 </div>
	<div class="page-content">
		<div class="left-side">
			<aside class="default-section">
				<div class="profile-header">
					<div class="header-content flex-container flex-vertical-center"> <img src="<?= getenv('hotel_url') ?>/avatar/avatarimage.php?figure=<?= $userData->look; ?>&amp;direction=2&amp;gesture=sml&amp;size=l" class="pixelated">
						<div class="header-details">
							<?php if ($user->username == $userData->username): ?> 
							<p style="color: lightgreen; font-weight: bold;">Dit ben jij :)</p>
							<?php else: ?> 
							<p id="report-modal" class="rounded-button white">Rapporteer <?= $userData->username ?>
							<?php endif; ?>
							<div class="header-title"><?= $userData->username ?> </div>
							<div class="header-description"><?= $userData->motto; ?></div>
						</div>
					</div>
				</div>
				
				<div class="profile-content"><?php if ($userData->rank >= 4) {echo $userData->username . ' is een <b> '. getenv('hotel_name') . ' Medewerker</b>';} ?>
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
					<div class="items-container">
						<?php foreach($badgesData as $userBadges): ?>
							<img src="<?= getenv('badge_image') ?><?= $userBadges->badge_code; ?>.gif">
						<?php endforeach; ?>
					
					</div>
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

<script>

// Get the modal
var modal = document.getElementById("report-modal-popup");

// Get the button that opens the modal
var btn = document.getElementById("report-modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

<?= $this->endSection() ?>