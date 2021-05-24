<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Input Buku Tamu Pengadilan Agama Waingapu</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/webcam.min.js"></script>

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
                <br/><br/>
                <form method="post" action="<?php echo base_url(); ?>tamu/save">
                    <div class="row mb-3" >
                        <label for="nomorktp" class="col-sm-2 col-form-label">Nomor KTP</label>
                        <div class="col-sm-10">    
                            <input type="number" class="form-control" id="nomorktp" name="nomorktp" placeholder="Isikan nomor KTP" style="background-color: #e8f2e4;" autocomplete="off">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama lengkap" style="background-color: #e8f2e4;" autocomplete="off">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <select name="kota" id="kota" class="form-control"  style="background-color: #e8f2e4;">
                                <option value="">Pilih Kota</option>
                                <?php foreach($datakota as $key): ?>
                                <option value="<?php echo $key->idkota ;?>"><?php echo $key->kota ;?></option>
                                <?php endforeach ?>  
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <select name="kecamatan" id="kecamatan" class="form-control"  style="background-color: #e8f2e4;">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                        <div class="col-sm-10">
                            <select name="kelurahan" id="kelurahan" class="form-control"  style="background-color: #e8f2e4;">
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Isikan alamat" style="background-color: #e8f2e4;" autocomplete="off"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nomorhp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nomorhp" name="nomorhp" placeholder="Isikan nomor HP" style="background-color: #e8f2e4;" autocomplete="off">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control"  style="background-color: #e8f2e4;" autocomplete="off">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="keperluan" name="keperluan" placeholder="Isikan keperluan" style="background-color: #e8f2e4;" autocomplete="off"></textarea>
                        </div>
                    </div>
                    
                    <!-- akses kamera -->
                    <!-- <div align="center">
                        <video autoplay="true" id="video-webcam" height="300" width="300">
                            Browser tidak mendukung, perlu update!
                        </video>
                    </div> -->
                    <div align="center">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-md-6"> -->
                                <div id="my_camera"></div>
                                <br/>
                                <!-- <input type=button value="Take Snapshot" onClick="take_snapshot()"> -->
                                <input type="hidden" name="image" class="image-tag">
                            <!-- </div> -->
                            <!-- <div class="col-md-6">
                                <div id="results">Your captured image will appear here...</div>
                            </div> -->
                            <!-- <div class="col-md-12 text-center">
                                <br/>
                                <button class="btn btn-success">Submit</button>
                            </div> -->
                        <!-- </div> -->
                    </div>
                    <!-- end akses kamera -->

                    <script type="text/javascript">
                        // // seleksi elemen video
                        // var video = document.querySelector("#video-webcam");

                        // // minta izin user
                        // navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

                        // // jika user memberikan izin
                        // if (navigator.getUserMedia) {
                        //     // jalankan fungsi handleVideo, dan videoError jika izin ditolak
                        //     navigator.getUserMedia({ video: true }, handleVideo, videoError);
                        // }

                        // // fungsi ini akan dieksekusi jika  izin telah diberikan
                        // function handleVideo(stream) {
                        //     video.srcObject = stream;
                        // }

                        // // fungsi ini akan dieksekusi kalau user menolak izin
                        // function videoError(e) {
                        //     // do something
                        //     alert("Izinkan menggunakan webcam!")
                        // }

                        // function takeSnapshot() {
                        //     // buat elemen img
                        //     var img = document.createElement('img');
                        //     var context;

                        //     // ambil ukuran video
                        //     var width = video.offsetWidth
                        //             , height = video.offsetHeight;

                        //     // buat elemen canvas
                        //     canvas = document.createElement('canvas');
                        //     canvas.width = width;
                        //     canvas.height = height;

                        //     // ambil gambar dari video dan masukan 
                        //     // ke dalam canvas
                        //     context = canvas.getContext('2d');
                        //     context.drawImage(video, 0, 0, width, height);

                        //     // render hasil dari canvas ke elemen img
                        //     img.src = canvas.toDataURL('image/png');
                        //     document.body.appendChild(img);
                        // }
                        // Webcam.set({
                        //     width: 490,
                        //     height: 390,
                        //     image_format: 'jpeg',
                        //     jpeg_quality: 90
                        // });
                    
                        Webcam.attach( '#my_camera' );
                    
                        function take_snapshot() {
                            Webcam.snap( function(data_uri) {
                                $(".image-tag").val(data_uri);
                                document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                            } );
                        }
                    </script>

                    <!-- cara kedua -->
                    <!-- <p><span id="errorMsg"></span></p> -->

                    <!-- Stream video via webcam -->
                    <!-- <div class="video-wrap" align="center">
                        <video id="video" playsinline autoplay height="300" width="300"></video>
                    </div> -->

                    <!-- Trigger canvas web API -->
                    <!-- <div class="controller">
                        <button id="snap">Capture</button>
                    </div> -->

                    <!-- Webcam video snapshot -->
                    <!-- <canvas id="canvas" width="640" height="480"></canvas> -->

                    <!-- <script type="text/javascript">
                        'use strict';

                        const video = document.getElementById('video');
                        const canvas = document.getElementById('canvas');
                        const snap = document.getElementById("snap");
                        const errorMsgElement = document.querySelector('span#errorMsg');

                        const constraints = {
                            audio: false,
                            video: {
                                width: 1280, height: 720
                            }
                        };

                        // Access webcam
                        async function init() {
                            try {
                                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                                handleSuccess(stream);
                            } catch (e) {
                                errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
                            }
                        }

                        // Success
                        function handleSuccess(stream) {
                            window.stream = stream;
                            video.srcObject = stream;
                        }

                        // Load init
                        init();

                        // Draw image
                        var context = canvas.getContext('2d');
                        snap.addEventListener("click", function() {
                            context.drawImage(video, 0, 0, 640, 480);
                        });
                    </script> -->
                    
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

    <!-- load kecamatan dan kelurahan -->
    <script>
        $(document).ready(function(){
            loadkecamatan();
            loadkelurahan();
        });

        function loadkecamatan(){
            $("#kota").change(function(){
                var getkota = $("#kota").val();
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    url: "<?= base_url(); ?>tamu/listKecamatan",
                    data: {kota: getkota},
                    success: function(data){                        
                        var html = "";
                        var i;
                        html += '<option value="">Pilih Kecamatan</option>';
                        for (i = 0; i < data.length; i++) {
                            html += '<option value="'+ data[i].idkecamatan +'">'+ data[i].kecamatan +'</option>';
                        }
                        $("#kecamatan").html(html);                     
                    }
                });console.log($("#kecamatan").val());
            });
        }

        function loadkelurahan(){
            $("#kecamatan").change(function(){
                var getkecamatan = $("#kecamatan").val();
                // console.log(getkecamatan);
                if(getkecamatan != ''){
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "<?= base_url(); ?>tamu/listKelurahan",
                        data: {kecamatan: getkecamatan},
                        success: function(data){                            
                            var html = "";
                            var i;
                            html += '<option value="">Pilih Kelurahan</option>';
                            for (i = 0; i < data.length; i++) {
                                html += '<option value="'+ data[i].idkelurahan +'">'+ data[i].kelurahan +'</option>';
                            }
                            $("#kelurahan").html(html);                    
                        }
                    });
                } else {
                    $("#kelurahan").html('<option value="">Pilih Kelurahan</option>');
                };
            });
        }
    </script>
    <!-- end load kecamatan kelurahan -->

    </body>
</html>

