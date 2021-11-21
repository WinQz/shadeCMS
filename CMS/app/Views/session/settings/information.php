<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="settings_password">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1>Information
      </h1>
      All the information about the settings features
    </div>
  </header>
  <div class="page-content">
    <article class="default-section">
      <div class="settings-panel">
      <a href="/account/information" class="verification selected" data-label="Information">
        </a>
        <a href="/account/email" class="email" data-label="Change Email">
        </a>
        <a href="/account/password" class="password" data-label="Change Password">
        </a>
      </div>
      <h3 class="aside-title">Information
    </h3>
    <p>This place is for changing your account credentials or information.</p>
    </article>
  </div>


<?= $this->endSection() ?>