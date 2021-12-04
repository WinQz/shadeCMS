<?= $this->extend('user') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="index">
  <div class="page-content">
    <article class="">
      <div class="sides-container">
        <div>
          <div id="login-dialog" class="login-popup zoom-anim-dialog">
            <h3 class="aside-title">Log in op <?= getenv('hotel_name') ?>
            </h3>
          <form method="POST" action="/account/submit">
            <div class="login-form">
              <label for="login-username-input-target" class="username-input">
                <input type="text" name="username" class="rounded-input blue-active" id="login-username-input-target" placeholder="<?= getenv('hotel_name') ?>naam..." required="">
                <i class="flaticon-user-1">
                </i>
              </label>
              <label for="login-password-input-target" class="password-input">
                <input type="password" name="password" class="rounded-input blue-active" id="login-password-input-target" placeholder="Wachtwoord..." autocomplete="off" required="">
                <i class="flaticon-padlock">
                </i>
              </label>
              <a href="password/claim" class="claim-password" data-close-popup="true" style="margin-top:1px">Wachtwoord/naam kwijt?
              </a>
              <button type="submit" class="rounded-button blue plain" id="login-request">Log in <?= getenv('hotel_name') ?>
              </button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<?= $this->endSection() ?>
