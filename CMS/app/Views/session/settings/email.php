<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="settings_email">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1>Change Email
      </h1>
      Change your email here, this can be used for restoring passwords. Please use a valid email.
    </div>
  </header>
  <div class="page-content">
    <article class="default-section">
      <div class="settings-panel">
      <a href="/account/information" class="verification" data-label="Information">
        </a>
        <a href="/account/email" class="email selected" data-label="Change Email">
        </a>
        <a href="/account/password" class="password" data-label="Change Password">
        </a>
      </div>
      <h3 class="aside-title">Change Email
      </h3>
      <form action="/account/email/save" method="POST" id="profileForm">
        <h4 class="form-subcategory">Password
        </h4>
        <div class="row">
          <div class="column-2">
            <input class="rounded-input purple-active" placeholder="Enter your password..." type="password" name="password" value="" id="avatarmotto" style="width:95%;">
          </div>
        </div>
        <h4 class="form-subcategory">Email
        </h4>
        <div class="row">
          <div class="column-2">
            <input class="rounded-input purple-active" placeholder="Enter your new email..." type="email" name="new_email" value="<?= $user->mail ?>" id="avatarmotto" style="width:95%;">
          </div>
        </div>
        <div class="form-help">Your email must be a valid one.
        </div>
        <input type="submit" class="rounded-button purple">
      </form>
    </article>
  </div>


<?= $this->endSection() ?>