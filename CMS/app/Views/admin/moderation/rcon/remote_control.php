<?= $this->extend('admin') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="help">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1><?= getenv('hotel_name') ?> Admin Panel
      </h1>
      Verstuur berichten naar het hotel
    </div>
  </header>
  <div class="page-content">
    <div class="left-side">
      <article class="default-section">
        <h3 class="aside-title">Remote Control
        </h3>
		<form action="/admin/moderation/rcon/alert" method="POST">
		<input class="rounded-input blue-active" style="width: 60%;" type="text" name="rcon_message" placeholder="Bericht voor hotel alert..."></input>
		<input class="rounded-button" type="submit"></input>
		</form>
        </p>
      </article>
    </div>
    <div class="right-side">
      <aside class="default-section">
        <h3 class="aside-title">Rcon Feature
        </h3>
        <p>
            Stel een hotel alert op.
        </p>

      </aside>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
