<?= $this->extend('admin') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="help">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1><?= getenv('hotel_name') ?> Admin Panel
      </h1>
      View all Logs and manage user accounts.
    </div>
  </header>
  <div class="page-content">
    <div class="left-side">
      <article class="default-section">
        <h3 class="aside-title">Welcome to the Admin Panel
        </h3>
        <img src="/assets/images/web/pages/help/frank.gif" style="float:right">
        <h4>What is this place??
        </h4>
        <p>
        </p>
        <p>
          <strong>This is the Admin Panel
          </strong>
        </p>
        <p>Admin panel is a build-in system for managing users and hotel settings. You can't just manage everything without the proper permissions.
        </p>
      </article>
    </div>
    <div class="right-side">
      <aside class="default-section">
        <h3 class="aside-title">Warning
        </h3>
        <p>
            Do not abuse the <?= getenv('hotel_name') ?> Admin Panel, we can see anything. When we think / know you abused your rank you'll get unranked.
        </p>

      </aside>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
