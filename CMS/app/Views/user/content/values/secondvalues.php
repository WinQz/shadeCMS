<?= $this->extend('user') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="community_value">
  <header class="page-header flex-container flex-vertical-center">
    <div class="page-header-content">
      <h1>Ruilwaarde
      </h1>
      Bekijk hier de waardes van Meubi's in <?= getenv('hotel_name') ?>.
    </div>
  </header>
  <div class="page-content">
    <div class="left-side">
      <article class="default-section ranking-container">
        <table class="default-table ranking-content">
          <thead>
            <tr>
              <th colspan="2">Meubelnaam
              </th>
              <th>Waarde in SS
              </th>
              <th>Waarde in BC
              </th>
              <th>Aantal
              </th>
              <th>Koers
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/rare_elephant_statue_2_icon.png" class="pixelated">
              </td>
              <td>Bronzen Olifant
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/none.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/rare_elephant_statue_1_icon.png" class="pixelated">
              </td>
              <td>Zilveren Olifant
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/none.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/cloud_egg_icon.png" class="pixelated">
              </td>
              <td>Parelmoer Ei
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/none.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/rare_chinahorse_icon.png" class="pixelated">
              </td>
              <td>Chinees Paard
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/none.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/cloud_throne_icon.png" class="pixelated">
              </td>
              <td>Wolken Troon
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/none.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/poster2005_icon.png" class="pixelated">
              </td>
              <td>Infobus
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/none.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/bolly_cherry_icon.png" class="pixelated">
              </td>
              <td>Kersenboom
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/none.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/doener_idabbo1_icon.png" class="pixelated">
              </td>
              <td>Döner Machine
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/down.gif" class="pixelated">
              </td>
            </tr>
            <tr>
              <td>
                <img src="/bibliotheek/meubels/icon/rare_vdoll_icon.png" class="pixelated">
              </td>
              <td>Voodoopop
              </td>
              <td>0.5
              </td>
              <td>100
              </td>
              <td>
              </td>
              <td>
                <img src="/assets/images/web/pages/value/up.gif" class="pixelated">
              </td>
            </tr>
          </tbody>
        </table>
      </article>
    </div>
    <div class="right-side">
      <aside class="default-section">
        <h3 class="aside-title">Ik ben opzoek naar..
        </h3>
        <a href="/community/secondvalues" class="values">
          <button type="button" class="btn btn-primary btn-lg outline" style="color: #33a6cc;border-color: #33a6cc;">Halve SS
          </button>
        </a>
        <a href="/community/values" class="values">
          <button type="button" class="btn btn-primary btn-lg outline">Super Zeldzaam SS
          </button>
        </a>
      </aside>
    </div>
  </div>
  <link href="/assets/css/custombuttons.css" rel="stylesheet">
</section>

<?= $this->endSection() ?>
