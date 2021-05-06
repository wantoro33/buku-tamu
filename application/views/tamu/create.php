<!doctype html>
<html lang="en">
  <head>
    <title>Input Buku Tamu Pengadilan Agama Waingapu</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
 
  </head>
  <body style="background-image: url('<?=base_url('assets/pics/bg-form.png')?>'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="container" style="padding-top: 70px;">
   
        <div class="card" style="padding-top: 10px;">
            <div class="card-body">
            <img class="img-fluid" src="<?=base_url('assets/pics/header-buku-tamu.png')?>" alt="header" width="1300" height="350"></img>
            <?php 
            if(validation_errors() != false)
            {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
                <?php
            }
            ?>
            <form method="post" action="<?php echo base_url(); ?>tamu/save">
                <!-- <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="datetime-local" class="form-control datepicker" id="tanggal" name="tanggal" value="<?php echo date('m/d/Y h:i:s', time()); ?>">
                </div> -->

                <div class="row mb-3" >
                    <label for="nomorktp" class="col-sm-2 col-form-label">Nomor KTP</label>
                    <div class="col-sm-10">    
                        <input type="text" class="form-control" id="nomorktp" name="nomorktp" placeholder="Isikan nomor KTP" style="background-color: #e8f2e4;">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama lengkap" style="background-color: #e8f2e4;">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" id="kota" name="kota" placeholder="Isikan kota" style="background-color: #e8f2e4;"> -->
                        <select name="kota" id="kota" class="form-control"  style="background-color: #e8f2e4;">
                            <?php foreach($datakota as $key): ?>
                            <option value="<?php echo $key->idkota ;?>"><?php echo $key->kota ;?></option>
                            <?php endforeach ?>  
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Isikan kecamatan" style="background-color: #e8f2e4;"> -->
                        <select name="kecamatan" id="kecamatan" class="form-control"  style="background-color: #e8f2e4;">
                            <?php foreach($datakecamatan as $key): ?>
                            <option value="<?php echo $key->idkecamatan ;?>"><?php echo $key->kecamatan ;?></option>
                            <?php endforeach ?>  
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Isikan kelurahan" style="background-color: #e8f2e4;"> -->
                        <select name="kelurahan" id="kelurahan" class="form-control"  style="background-color: #e8f2e4;">
                            <?php foreach($datakelurahan as $key): ?>
                            <option value="<?php echo $key->idkelurahan ;?>"><?php echo $key->kelurahan ;?></option>
                            <?php endforeach ?>                             
                        </select>

                    <!--test--> 
                    <!-- <select name="kelurahan" id="kelurahan" style="width: 200px;">
                    <   option value="">Pilih</option>
                    </select>

                    <div id="loading" style="margin-top: 15px;">
                            <small>Loading...</small>
                        </div> -->
                    <!--test-->
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" id="alamat" placeholder="Isikan alamat" style="background-color: #e8f2e4;"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nomorhp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nomorhp" name="nomorhp" placeholder="Isikan nomor HP" style="background-color: #e8f2e4;">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control"  style="background-color: #e8f2e4;">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="keperluan" name="keperluan" placeholder="Isikan keperluan" style="background-color: #e8f2e4;"></textarea>
                    </div>
                </div>
                
                <!-- akses kamera -->
                <div align="center">
                    <video autoplay="true" id="video-webcam" height="300" width="300">
                        Browser tidak mendukung, perlu update!
                    </video>
                </div>

                <script type="text/javascript">
                    // seleksi elemen video
                    var video = document.querySelector("#video-webcam");

                    // minta izin user
                    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

                    // jika user memberikan izin
                    if (navigator.getUserMedia) {
                        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
                        navigator.getUserMedia({ video: true }, handleVideo, videoError);
                    }

                    // fungsi ini akan dieksekusi jika  izin telah diberikan
                    function handleVideo(stream) {
                        video.srcObject = stream;
                    }

                    // fungsi ini akan dieksekusi kalau user menolak izin
                    function videoError(e) {
                        // do something
                        alert("Izinkan menggunakan webcam!")
                    }

                    function takeSnapshot() {
                        // buat elemen img
                        var img = document.createElement('img');
                        var context;

                        // ambil ukuran video
                        var width = video.offsetWidth
                                , height = video.offsetHeight;

                        // buat elemen canvas
                        canvas = document.createElement('canvas');
                        canvas.width = width;
                        canvas.height = height;

                        // ambil gambar dari video dan masukan 
                        // ke dalam canvas
                        context = canvas.getContext('2d');
                        context.drawImage(video, 0, 0, width, height);

                        // render hasil dari canvas ke elemen img
                        img.src = canvas.toDataURL('image/png');
                        document.body.appendChild(img);
                    }
                </script>
                
                <!-- akses kamera -->

                <div style="padding-top: 10px;" align="center">
                    <button type="submit" class="btn btn-primary" onclick="takeSnapshot()">Simpan</button>
                    <a href="http://localhost/resepsionis-app/" class="btn btn-danger btn-block" role="button">Keluar</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <footer class="footer">
	  <div class="container" style="text-align:center;">
	  	<hr/>
        <span>Pengadilan Agama Waingapu @<?php echo date('Y'); ?></span>
      </div>
    </footer>

    <!-- script untuk load kelurahan -->                               

    <!-- end script -->

  </body>
</html>