<?= $this->extend('admin') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="help">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1>Online Users
      </h1>
      View all online users in <?= getenv('hotel_name') ?>
    </div>
  </header>
  <div class="page-content">
    <div class="left-side">
      <article class="default-section">
        <h3 class="aside-title">Online Users
        </h3>
        <h4>Current playing <?= getenv('hotel_name') ?>'s.
        </h4>
        <p>
        <?php foreach($onlineUserData as $onlineUsers): ?>
        <a href="/profile/<?= $onlineUsers->username ?>">
        <img src="https://habbo.com/habbo-imaging/avatarimage?figure=<?= $onlineUsers->look ?>&direction=2&gesture=sml&size=3" alt="<?= $onlineUsers->username ?>" style="position: relative;">
        </a>
        <?php endforeach; ?>
        </p>
      </article>
    </div>
    <div class="right-side">
      <aside class="default-section">
        <h3 class="aside-title">Online Users
        </h3>
        <p>
            You can view all the online players, you can also click on the avatar to go view them.
        </p>
        
      </aside>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
