<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Milan">
    <meta name="robots" content="follow, index">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="ShadeCMS" />
    <meta name="twitter:description" content="Virtuele wereld waar je vrienden kunt maken en ontmoeten." />
    <meta name="twitter:image" content="/assets/images/summary-picture.png" />
    <meta name="twitter:site" content="@shadeZoneFans" />
    <meta name="twitter:url" content="http://localhost" />
    <meta name="twitter:widgets:csp" content="on" />
    <meta property="og:title" content="shade Hotel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://localhost">
    <meta property="og:image" content="/assets/images/summary-picture.png">
    <meta property="og:description" content="Virtuele wereld waar je vrienden kunt maken en ontmoeten.">
    <meta property="og:site_name" content="ShadeCMS">
    <meta name="description" content="Virtuele wereld voor jongeren waar je vrienden kunt maken en ontmoeten. Ontmoet en maak vrienden, chat met anderen, maak je eigen avatar, ontwerp gratis je eigen kamer en nog veel meer ...">
    <meta name="keywords" content="shade, shade hotel, virtueel, wereld, sociaal netwerk, gratis, community, avatar, chat, online, tiener, roleplaying, doe mee, sociaal, groepen, forums, veilig, speel, games, online, vrienden, tieners, zeldzaams, zeldzame meubi, verzamelen, maak, verzamel, kom in contact, meubi, meubeks, huisdieren, kamer inrichten, delen, uitdrukking, badges, hangout, muziek, beroemdheid, VIP-visits, celebs, mmo, mmorpgs, massive multiplayer, dox, dox hotel, doxhotel, space hotel, spacehotel, space, sunnie, sunnie day, sunnieday, habbo, HABBO, habbo hotel, habboo, habbo city, habbocity, cool, virtuele wereld, vip, retro, retro hotel, habbo retro, gratis, gratis habbo, holo, leet, leethotel, hotel">
    <link rel="shortcut icon" href="/favi.ico" type="image/x-icon">
    <title>Maak vrienden, speel games, maak kamers en val op! - shade Hotel
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/fonts.css?v=602">
    <link rel="stylesheet" href="/assets/css/iziToast.css?v=602">
    <link rel="stylesheet" href="/assets/css/flaticon.css?v=602">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css?v=602">
    <link rel="stylesheet" href="/assets/css/selectric.css?v=602">
    <link rel="stylesheet" href="/assets/css/circle.css?v=601">
    <link rel="stylesheet" href="/assets/css/web3.css?v=6011f2dds413">
    <link rel="stylesheet" href="/assets/css/app.css?v=612">
    <link rel="stylesheet" href="/assets/css/web.responsive.css?v=601">
    <link rel="stylesheet" href="/assets/css/popup.css?v=601">
    <link rel="stylesheet" href="/assets/css/nanoscroller.css?v=601">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="/assets/js/jquery-3.2.1.min.js?v=60">
    </script>
    <script src="/assets/js/jquery.ui.touch-punch.min.js?v=60">
    </script>
    <script src="https://www.google.com/recaptcha/api.js?v=60">
    </script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
  </head>
  <div class="cookies-accept-container">
    <div class="close-container">&times;
    </div>
    ShadeCMS maakt gebruik van eigen cookies en die van derden om zo een betere service te kunnen verlenen en zorgt er daarnaast voor dat de advertenties beter bij jouw voorkeuren aansluiten. Als je gebruik maakt van onze website ga je akkoord met ons cookie-beleid.
    <a href="/cookies" target="_blank">Lees meer
    </a>
  </div>
  <header class="header-container pixelated is-large">
    <div class="header-content">
      <div class="logo">
        <a href="/">Shade- Virtuele wereld voor jongeren!
        </a>
      </div>
      <div class="account-container">
        <div class="account-title">
          Word lid van onze community en
          <span>maak nieuwe vrienden
          </span>
        </div>
        <?php if(!isset($user)): ?>
        <div class="account-buttons">
          <a href="/" class="rounded-button white">Inloggen
          </a>
          <span>of</span>
          <a href="/registreren" class="rounded-button white plain">Meld je gratis aan!
          </a>
        </div>
        <?php else: ?>
            <div class="account-buttons">
          <a href="/hotel" class="rounded-button white plain">Naar Shade
          </a>
        </div>
        <?php endif ?>
      </div>
    </div>
  </header>
<?php if(!isset($user)): ?>
  <nav class="navigation-container">
    <ul class="navigation-menu flex-container">
      <li class="navigation-item main-link-item">
        <a href="/me">
        </a>
      </li>
      <li class="navigation-item" data-category="index">
        <a href="/">Home
        </a>
      </li>
      <li class="navigation-item has-items" data-category="index">
        <a href="#">Community
        </a>
        <ul class="navigation-submenu">
          <li class="navigation-subitem">
            <a href="/community/management">Management
            </a>
          </li>
          <li class="navigation-subitem">
            <a href="/community/values">Ruilwaarde
            </a>
          </li>
        </ul>
      </li>
      <li class="navigation-item navigation-right-side-item has-items" style="position: relative; left: -5%;">
    <form method="POST" action="/community/search" style="position: relative; top: 17%; float: right; display: flex;">
      <input class="rounded-input purple-active" placeholder="Search for a Shade..." name="search_user" type="text"></input>
      <p>&nbsp;</p>
      <input type="submit" class="rounded-button"></input>
    </form>
      </li>
    </ul>
  </ul>
</nav>
<?php else: ?>
    <nav class="navigation-container">
    <ul class="navigation-menu flex-container">
      <li class="navigation-item main-link-item">
        <a href="/">
        </a>
      </li>
      <li class="navigation-item has-items" data-category="index">
        <a href="/me"><?= $user->username ?>
        </a>
        <ul class="navigation-submenu">
        <li class="navigation-subitem">
            <a href="/profile/<?= $user->username; ?>">Mijn Profiel
            </a>
          </li>
          <li class="navigation-subitem">
            <a href="/account/information">Settings
            </a>
          </li>
          <li class="navigation-subitem">
            <a href="/logout">Logout
            </a>
          </li>
        </ul>
      </li>
      <li class="navigation-item has-items" data-category="index">
        <a href="#">Community
        </a>
        <ul class="navigation-submenu">
          <li class="navigation-subitem">
            <a href="/community/management">Management
            </a>
          </li>
          <li class="navigation-subitem">
            <a href="/community/values">Ruilwaarde
            </a>
          </li>
        </ul>
      </li>
      <li class="navigation-item navigation-right-side-item has-items" style="position: relative; left: -5%;">
    <form method="POST" action="/community/search" style="position: relative; top: 17%; float: right; display: flex;">
      <input class="rounded-input purple-active" placeholder="Search for a Shade..." name="search_user" type="text"></input>
      <p>&nbsp;</p>
      <input type="submit" class="rounded-button"></input>
    </form>
      </li>
    </ul>
    </li>

  </ul>
</nav>
<?php endif ?>
</div>

<?= $this->renderSection('content') ?>



<footer class="footer-container">
  <div class="footer-social-buttons flex-container flex-horizontal-center">
    <a href="https://www.instagram.com/shadehotel.nl" class="instagram-button" target="_blank">
    </a>
    <a href="https://www.facebook.com/shadehotelnl" class="facebook-button" target="_blank">
    </a>
    <a href="https://www.twitter.com/shadeZoneFans" class="twitter-button" target="_blank">
    </a>
    <a href="https://discord.gg/hDRXueP" class="discord-button" target="_blank">
    </a>
  </div>
  <div class="footer-copyright">&copy; 2020 yourhotelname |
    <a href="/info/rules">De Shade Regels
    </a> |
    <a href="/info/terms">Algemene voorwaarden
    </a> |
    <a href="/info/privacy">Privacyverklaring
    </a><br>
    ShadeCMS 1.0 (beta) | Made By Milan
  </div>
</footer>
<script src="/assets/js/js.cookie.js?v=60">
</script>
<script src="/assets/js/jquery.history.js?v=60">
</script>
<script src="/assets/js/jquery.fullscreen.min.js?v=60">
</script>
<script src="/assets/js/jquery.magnific-popup.js?v=60">
</script>
<script src="/assets/js/iziToast.min.js" type="text/javascript">
</script>
<script>
  <?php
  if(session('errors') && is_array(session('errors'))) {
    foreach(array_slice(session('errors'), 0, 1) as $errors => $index) {
      ?>
        iziToast.error({
        position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Oops..', message: '<?php echo $index ?>'}
                      );
      <?php }
  }
  elseif(session('errors')) {
    ?>
      iziToast.error({
      position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Oops..', message: '<?php echo session('errors') ?>'}
                    );
    <?php }
  ?>
    <?php
  if(session('success') && is_array(session('success'))) {
    foreach(array_slice(session('success'), 0, 1) as $errors => $index) {
      ?>
        iziToast.success({
        position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Gelukt!', message: '<?php echo $index ?>'}
                        );
      <?php }
  }
  elseif(session('success')) {
    ?>
      iziToast.success({
      position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Gelukt!', message: '<?php echo session('success') ?>'}
                      );
    <?php }
  ?>
</script>
<script type="text/javascript">
  ;
  ( function( $ ) {
    $( '.swipebox' ).swipebox( {
      useCSS : true,
      useSVG : true,
      initialIndexOnArray : 0,
      hideCloseButtonOnMobile : false,
      removeBarsOnMobile : false,
      hideBarsDelay : 3000,
      videoMaxWidth : 1140,
      beforeOpen: function() {
      }
      ,
      afterOpen: null,
      afterClose: function() {
      }
      ,
      loopAtEnd: false
    }
                             );
  }
  )( jQuery );
</script>
<script src="/assets/js/nanoscroller.js?v=60">
</script>
<script src="/assets/js/selectric.js?v=60">
</script>
<script src="/assets/js/functions.js?v=60">
</script>
<script src="/assets/js/web/loading.js?v=60">
</script>
</body>
</html>
