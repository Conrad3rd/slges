<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sammlung Esche</title>
    <link rel="stylesheet" href="assets/css/bulma.min.css">
  </head>
  <body>
    <section class="hero is-medium is-info is-bold">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            slges.de - Sammlung Esche
          </h1>
          <h2 class="subtitle">
            Myanmar Bilder
          </h2>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h3 class="title is-3">Environment</h3>
            <hr>
            <div class="content">
              <ul>
                <li><?= apache_get_version(); ?></li>
                <li>PHP <?= phpversion(); ?></li>
                <li>
                <?php
                  include 'src/php/conn_open.php';
                  include 'src/php/var.php';

                  /* check connection */
                  if (mysqli_connect_errno()) {
                    printf("MySQL connecttion failed: %s", mysqli_connect_error());
                  } else {
                    /* print server version */
                    printf("MySQL Server %s", mysqli_get_server_info($conn));
                  }
                  /* close connection */
                  include 'src/php/conn_close.php';
                ?>
                </li>
                <li>656,8 MB	Bilder 150x150</li>
                <li>3,3 GB	Bilder 1024x768</li>
                <li>135,7 GB	Bilder ca. 5000x5000</li>
                <li>139,7 GB alle</li>
                <li><a href="info.php">phpinfo()</a></li>
                <li><a href="phpmyadmin">phpMyAdmin</a></li>
              </ul>
            </div>
          </div>
          <div class="column">
            <h3 class="title is-3">Quick Links</h3>
            <hr>
            <div class="content">
              <ul>
                <li><a href="01_viewer.php?id=<?php echo (rand(1,17009));?>">Viewer (random)</a></li>
                <li>
                  <a href="01_gallery.php?funk=filter_exclude&exclude=9031,9143,379,381,384,9141,133,490,9099,358">
                  Galerie</a>(Es werden 13180 Bilder geladen!)
                </li>
                <li><a href="allHash.php">Hashtags</a></li>
                <li><a href="notes.php">Notizen</a></li>
                  <!-- <li><a href="/test_db.php">Test DB Connection with mysqli</a></li>
                  <li><a href="/test_db_pdo.php">Test DB Connection with PDO</a></li>

                  <ul>
                    <li><a href="01_gallery.php">Gallery</a></li>
                    <li><a href="01_suche_AND.php">suche AND</a></li>
                    <li><a href="01_gallery.php?funk=filter_exclude&exclude=255,9143,9031,9141,133">nicht Myanmar</a></li>

                    <ul>
                      <h5>ohne Hashtag:</h5>
                      <li>Buch(379)</li>
                      <li>Myanmar(9143)</li>
                      <li>Kalibrierung(9031)</li>
                      <li>Zeitung(381)</li>
                      <li>Dokumente(384)</li>
                      <li>Stabi(9141)</li>
                      <li>Potsdam(8133)</li>
                      <li>Ungarn(490)</li>
                      <li>unkenntlich(358)</li>
                      <li>xyz(9099)</li>
                    </ul>

                    <li><a href="01_gallery.php?funk=filter_exclude&exclude=255,9143,133,9031,381,384,9099,8896,490,9143,9141">nicht Myanmar2</a></li>

                  </ul> -->

              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
