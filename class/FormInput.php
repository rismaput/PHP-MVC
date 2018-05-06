<!DOCTYPE html>
<html>
  <head>
  	<title>Formulir Online </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="html_form.css">
    
  </head>

  <body>
  <form action="ViewForm" method="post" enctype="multipart/form-data">
    <div class="background">
    <div class="backdrop">
    <div class="judul">
  		<img src="logo1.png" align="center" width="100" height="100">
      <h1>Formulir Pendaftaran Perusahaan TELKOMSEL</h1>
      <hr><br></div>
  	   <p class="sansserif"> 
          <label for="nama_L">Nama Lengkap :  </label>
          <input type="text" id="nama_L"><br><br>
  		    <label for="nama_P">Nama Panggilan :  </label>
          <input type="text" id="nama_P"><br><br>
  		    <label for="ttl">Tempat, Tanggal Lahir :  </label>
          <input type="text" id="ttl"><br><br>
  		    <label>Gender :</label><br>
  		    <input type="radio" name="gender">Laki-laki<br>
  		    <input type="radio" name="gender">Perempuan<br><br>
          <label>Alamat : </label><br>
          <textarea cols="50" rows="7" name="alamat"></textarea><br><br>
          <label for="no">No. Hp :</label>
          <input type="text" name="no"><br><br>
          <label for="email">Email :</label>
          <input type="textfield" name="email"><br><br>
          <label>Hobby : </label><br>
          <textarea cols="50" rows="7" name="hobby"></textarea><br><br>
          <label>Agama :</label>
            <select name="agama">
                <option value="0">Islam</option>
                <option value="1">Kristen</option>
                <option value="2">Kalotik</option>
                <option value="3">Hindu</option>
                <option value="4">Budha</option>
                <option value="5">Kong Hu Cu</option>
              </select><br><br>
          <label>Pengalaman Organisasi : </label><br>
          <textarea cols="50" rows="7" name="po"></textarea><br><br>
          <label>Riwayat Pendidikan :</label><br>
          <input type="checkbox" name="peminatan" value="0">TK<br>
          <input type="checkbox" name="peminatan" value="1">SD<br>
          <input type="checkbox" name="peminatan" value="2">SMP<br>
          <input type="checkbox" name="peminatan" value="3">SMA<br>
          <input type="checkbox" name="peminatan" value="4">Diloma<br>
          <input type="checkbox" name="peminatan" value="5">Sarjana<br>
          <input type="checkbox" name="peminatan" value="6">Pascasarjana<br><br>
          <label>VISI anda : </label><br>
          <textarea cols="50" rows="7" name="visi"></textarea><br>
          <br>
          <label>Misi anda :</label><br>
          <textarea cols="50" rows="7" name="misi"></textarea><br>
          <br>
          <label>Motifasi anda :</label><br>
          <textarea cols="50" rows="7" name="motifasi"></textarea><br>
          <br>
          <label for="foto">Lampirkan foto anda :</label><br>
          <input required type="file" name="foto" accept="image/*">

          <input type="submit" value="Kirim Data">
      </p>
  	 </form>
      </div>
      </div>
  </body>
  </html>