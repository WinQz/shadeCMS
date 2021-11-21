<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="settings_password">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1>Change Password
      </h1>
      Change your password here. If someone asked you to change your password, don't do it!
    </div>
  </header>
  <div class="page-content">
    <article class="default-section">
      <div class="settings-panel">
      <a href="/account/information" class="verification" data-label="Information">
        </a>
        <a href="/account/email" class="email" data-label="Change Email">
        </a>
        <a href="/account/password" class="password selected" data-label="Change Password">
        </a>
      </div>
      <h3 class="aside-title">Change Password
      </h3>
      <form action="/account/password/save" method="POST" id="profileForm">
        <h4 class="form-subcategory">Old Password
        </h4>
        <div class="row">
          <div class="column-2">
            <input class="rounded-input purple-active" placeholder="Fill here your old password..." type="password" name="old_password" value="" id="avatarmotto" style="width:95%;">
          </div>
        </div>
        <h4 class="form-subcategory">New Password
        </h4>
        <div class="row">
          <div class="column-2">
            <input class="rounded-input purple-active" placeholder="Fill here your new password..." type="password" name="new_password" value="" id="avatarmotto" style="width:95%;">
          </div>
          <div class="column-2">
            <input class="rounded-input purple-active" placeholder="Repeat your new password..." type="password" name="password_confirmation" value="" id="avatarmotto" style="width:95%;">
          </div>
        </div>
        <div class="form-help">Your new password needs to be 6+ characters long.
        </div>
        <input type="submit" class="rounded-button purple">
      </form>
    </article>
  </div>


<?= $this->endSection() ?>