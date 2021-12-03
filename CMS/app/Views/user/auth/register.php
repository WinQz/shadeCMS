<?= $this->extend('user') ?>
<?= $this->section('content') ?>
<section class="page-container" data-page="index">
  <header class="page-header flex-container flex-vertical-center" style="background-image: url(/assets/images/web/pages/registration/banner.png); background-color: brown;">
            <div class="page-header-content">
                <h1>Meld je gratis aan!</h1>
                Maak je eigen Shade, ontmoet of maak nieuwe vrienden en speel spelletjes!
            </div>
        </header>
  <div class="page-content">
<article class="default-section">
  <div class="container" style="width: 100; ">
    <span class="error" id="top">
    </span>
    <div style="float: left; width: 43%;">
    </div>

<form action="/registreren/create" method="POST">
    <div class="sides-container">
      <div class="content-side">
        <h3 class="aside-title">Jouw Shade gegevens
        </h3>
        <div class="row">
          <h5>E-mailadres
          </h5>
          <input type="text" id="email" name="email" class="rounded-input blue-active" placeholder="Vul hier je e-mailadres in...">
        </div>
        <div class="row space-bottom">
          <div class="form-help">We zullen deze informatie nodig hebben om je account te herstellen voor het geval je de toegang verliest.
          </div>
        </div>
        <div class="row">
          <div class="column-2">
            <h5>Wachtwoord
            </h5>
            <input type="password" id="password" name="password" class="rounded-input blue-active" placeholder="Wachtwoord...">
          </div>
          <div class="column-2">
            <h5>Herhaal
            </h5>
            <input type="password" id="password_repeat" name="password_confirmation" class="rounded-input blue-active" placeholder="Herhaal wachtwoord...">
            <br>
          </div>
        </div>
        <div class="row space-bottom">
          <div class="form-help">Je wachtwoord moet minimaal 6 tekens lang zijn en letters en cijfers bevatten.
            <strong>Zorg dat je wachtwoord anders is dan op andere website's!
            </strong>
          </div>
        </div>
      </div>
      <div class="content-side">
        <h3 class="aside-title">Maak je Shade!
        </h3>
        <div class="row">
          <h5>Shadenaam
          </h5>
          <input type="text" id="username" name="username" class="rounded-input blue-active" onkeyup="checkUsernameOrEmail(this.value, 'username')" maxlength="12" placeholder="Shadenaam...">
        </div>
        <div class="row space-bottom">
          <div class="form-help">Jouw unieke naam in Shade Hotel.
          </div>
        </div>
        <div class="row space-bottom">
        </div>
        <input type="text" class="rounded-input blue-active" placeholder="Uw Motto" id="motto" name="motto" value="Nieuweling in Shade">
        <div class="form-group">
        </div>
      </div>
    </div>
  </div>
  <center>
    <input type="checkbox" name="bean_terms" value="true" required="">
    <small>Ik ga akkoord met de
      <a href="/info/terms">Algemene voorwaarden
      </a>.
    </small>
  </center>
  <button type="submit" id="registerSubmit" class="rounded-button blue submit-form default-prevent">Registreer
  </button>
</form>
</article>
</div>
</section>

<?= $this->endSection() ?>
