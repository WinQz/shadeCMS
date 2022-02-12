<?= $this->extend('user') ?>
<?= $this->section('content') ?>
<section class="page-container" data-page="help">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1>Badgeshop
      </h1>
      You can purchase all activated badges here, if you have enough diamonds or credits, you can.
    </div>
  </header>
  <div class="page-content">
    <div class="left-side">
      <article class="default-section" style="height: 400px;">
        <h3 class="aside-title">Badgeshop
    </h3>
   <!-- The Style will be put in web3.css after the full implementation of the badgeshop. !-->
    <style>
        #badge-container {
            width: 130px;
            height: 100px;
            text-align: center;
            margin: 1em;
            float: left;
            position: relative;
        }

        .badge-display {
            position: relative;
            box-shadow: 1px 1px 1px #000;
            border: 2px solid;
            background-color: lightgrey;
            border-color: gray;
        }

        .badge-purchase {
            top: 10px;
            position: relative;
        }
    </style>
        <?php foreach($shopBadges as $fetchBadges): ?>
        <div id="badge-container">
        <h4 style="border: 0px solid; background-color: lightgreen; border-radius: 12px; color: white;"><?= $fetchBadges->price ?> Diamonds</h4>
            <div class="badge-display">
            <img src="<?= getenv('badge_image')?><?= $fetchBadges->badge_code ?>.gif">
            <p style="font-weight: bold; color: white;"><?= $fetchBadges->badge_code ?></p>
        </div>
        <div class="badge-purchase">
        <a href="/shop/badgeshop/<?= $fetchBadges->badge_code ?>">
              <button class="rounded-button blue">Purchase</button>
        </a>
        </div>
        </div>
        <?php endforeach; ?>
      </article>
    </div>
    <div class="right-side">
    <aside class="default-section">
        <h3 class="aside-title">Diamonds
        </h3>
        <p>Your remaining Diamonds.
        </p>
        <p style="text-align: center;">
           <button style="font-size: 25px;" class="rounded-button blue"><?= $user->points ?> <img src="/assets/images/hotel/purses/diamonds-icon.png"></button>
        </p>
      </aside>
      <aside class="default-section">
        <h3 class="aside-title">Purchase Went Wrong?
        </h3>
        <p>You can submit your refund ticket here.
        </p>
        <p style="text-align: center;">
          <a href="/ticket/help" class="rounded-button blue">Request Refund
          </a>
        </p>
      </aside>
    </div>
  </div>
</section>

<?= $this->endSection() ?>