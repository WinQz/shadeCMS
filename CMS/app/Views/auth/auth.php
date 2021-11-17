<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="index">
  <div class="page-content">
    <article class="default-section">
      <div class="sides-container">
        <div class="content-side">
          <h3 class="aside-title">Log in op YabbisHotel <3
          </h3>
          <form action="/account/submit" method="post">
            <div class="column space-bottom">
              <h5>Yabbisnaam
              </h5>
              <input type="text" name="username" class="rounded-input blue-active username" placeholder="Yabbisnaam..." required="">
            </div>
            <div class="column space-bottom">
              <h5>Wachtwoord
              </h5>
              <input type="password" name="password" class="rounded-input blue-active" placeholder="Wachtwoord..." required="" autocomplete="off">
            </div>
            <div class="column space-bottom">
              <div class="form-help">
                <a href="http://localhost/account/forgot" style="float: right">Wachtwoord/naam kwijt?
                </a>
              </div>
            </div>
            <div class="column space-bottom">
              <input type="hidden" name="_asteroid" value="5b543ac81df82faea9d910f4d6921cd8709b7a27-f2ce1333f818dec7cb51e00e74bedd15">
              <p style="text-align: center; margin-top: 30px;">
                <button type="submit" class="rounded-button blue plain default-prevent">Log in
                </button>
              </p>
            </div>
          </form>
        </div>
        <div class="content-side">
          <h3 class="aside-title">Nieuw op Yabbis Hotel?
          </h3>
          <div class="column">
            <p>Yabbis is een virtuele wereld waar je vrienden kunt maken en ontmoeten.
            </p>
            <p>Yabbis is helemaal gratis! Maak snel je eigen Igniter en chat met je vrienden!
            </p>
            <p>Yabbis werkt op de mobiele telefoon, ipad, laptop &amp; computer, kom jij ook?
            </p>
            <hr>
          </div>
          <div class="column space-bottom">
            <p style="text-align: center; margin-top: 30px;">
              <a href="/registreren" class="rounded-button green plain default-prevent">Meld je gratis aan!
              </a>
            </p>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<?= $this->endSection() ?>
