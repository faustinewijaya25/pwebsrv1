<?php
require_once("daftar_mahasiswa.php");
require_once("daftar_dosen.php");
require_once("mahasiswa.php")
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css"
    <title>Program04</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col8">
        <?php
        if ( isset ($_GET['nim'])) {
          $mahasiswa = new Mahasiswa( $_GET['nim']);
          ?>
          <h1>Mahasiswa</h1>
          <table>
            <tr>
              <td class="field"> N I M:</td>
              <td class="data"><?= $mahasiswa->nim ?></td>
              </tr>

            <tr>
              <td class="field"> Nama Lengkap:</td>
              <td class="data"><?= $mahasiswa->nama ?></td>
            </tr>
            <tr>
              <td class="field">E-mail:</td>
              <td class="data"><?= $mahasiswa->email ?></td>
            </tr>
            <tr>
              <td class="field">Tanggal masuk:</td>
              <td class="data">
                <?= date('d F Y', strtotime($mahasiswa->tanggalmasuk)) ?></td>
              </tr>
            </table>
            <?php
        }
        ?>
      </div>
      <div class="col4">
      </div>
    </div>
  </div>

  </body>
</html>
