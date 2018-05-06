<!DOCTYPE html>
<html>
  <head>
    <title>Formulir Online </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="html_form.css">
    
  </head>

  <body>
  <?php
    $extension = strtolower(pathinfo($pic['pic']['name'], PATHINFO_EXTENSION));
    $photo = "images/uploaded." . $extension;
      if (file_exists($photo)) {
        unlink($photo);
      }
    move_uploaded_file($pic['pic']['tmp_name'], $photo);
  ?>
    <div class="background">
    <div class="backdrop">
    <div class="judul">
      <img src="logo1.png" align="center" width="100" height="100">
      <h1>Formulir Pendaftaran Perusahaan TELKOMSEL</h1>
      <hr><br></div>
       <p class="sansserif"> 
          <label for="nama_L">Nama Lengkap :  </label>
          <div><?php echo $data['nama_L']; ?></div>
          <label for="nama_P">Nama Panggilan :  </label>
          <div><?php echo $data['nama_P']; ?></div>
          <label for="ttl">Tempat, Tanggal Lahir :  </label>
          <div><?php echo $data['ttl']; ?></div>
          <label>Gender :</label><br>
          <div><?php echo $data['gender']; ?></div>
          <label>Alamat : </label><br>
          <div><?php echo $data['alamat']; ?></div>
          <label for="no">No. Hp :</label>
          <div><?php echo $data['no']; ?></div>
          <label for="email">Email :</label>
          <div><?php echo $data['email']; ?></div>
          <label>Hobby : </label><br>
          <div><?php echo $data['hobby']; ?></div>
          <label>Agama :</label>
          <div><?php echo $data['agama']; ?></div>
          <label>Pengalaman Organisasi : </label><br>
          <div><?php echo $data['po']; ?></div>
          <label>Riwayat Pendidikan :</label><br>
          <div>
            <ul>
            <?php
            foreach ($data['peminatan'] as $peminatan{
              echo "<li>" . $peminatan;
            }
            ?>
          </div>
          <label>VISI anda : </label><br>
          <div><?php echo $data['visi']; ?></div>
          <br>
          <label>Misi anda :</label><br>
          <div><?php echo $data['misi']; ?></div>
          <br>
          <label>Motifasi anda :</label><br>
          <div><?php echo $data['motifasi']; ?></div>
          <br>
          <label for="foto">Lampirkan foto anda :</label><br>
          <div>
                <img class="pas-foto" src="<?php echo "../../$photo" ?>" alt="Pas Foto">
          </div>
      </p>
     </form>
      </div>
      </div>
  </body>
  </html>