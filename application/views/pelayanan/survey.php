<!doctype html>
<html lang="en">
  <head>
  <title>Survey Kepuasan Pelayanan Pengadilan Agama Waingapu</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
 
  </head>
  <body style="background-image: url('<?=base_url('assets/pics/bg-form.png')?>'); background-repeat: no-repeat; background-attachment: fixed;background-size: 100% 100%;">
    <div class="container" style="padding-top: 70px;">   
      <div class="card" style="padding-top: 10px;">   
        <div class="card-body">
          <img class="img-fluid" src="<?=base_url('assets/pics/header-survey.png')?>" alt="header" width="1300" height="350"></img>
          <div class="container-fluid">
            <marquee><h4>Silahkan klik/pilih emoticon sesuai pilihan anda.</h4></marquee>
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
            <form method="post" action="<?php echo base_url(); ?>pelayanan/save">
              <div class="row">
                <div class="col-sm-4">
                  <div align="center">
                    <label for="optradio-1"><img class="img-fluid" src="<?=base_url('assets/pics/emot-love.png')?>" alt="header"></img></label>
                    <div class="radio">
                      <label><input type="radio" name="survey-radio" id="optradio-1" value="Sangat Puas"><h1>Sangat Puas</h1></label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div align="center">
                    <label for="optradio-2"><img class="img-fluid" src="<?=base_url('assets/pics/emot-blushing.png')?>" alt="header"></img></label>
                    <div class="radio">
                      <label><input type="radio" name="survey-radio" id="optradio-2" value="Puas"><h1>Puas</h1></label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div align="center">
                    <label for="optradio-3"><img class="img-fluid" src="<?=base_url('assets/pics/emot-anger.png')?>" alt="header"></img></label>
                    <div class="radio">
                      <label><input type="radio" name="survey-radio" id="optradio-3" value="Tidak Puas"><h1>Tidak Puas</h1></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="card" style="padding-top: 10px;">
                  <div class="card-body">                        
                    <div class="row mb-3">
                      <label for="kritiksaran" class="col-sm-2 col-form-label">Kritik dan Saran</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="kritiksaran" id="kritiksaran" placeholder="Isikan kritik dan saran" style="background-color: #e8f2e4;"></textarea>
                      </div>
                    </div>
                    <div style="padding-top: 10px;" align="center">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <a href="http://localhost/resepsionis-app/" class="btn btn-danger btn-block" role="button">Keluar</a>
                    </div>                        
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>        
    </div>
    <footer class="footer">
	  <div class="container" style="text-align:center;">
	  	<hr/>
        <span>Pengadilan Agama Waingapu @<?php echo date('Y'); ?></span>
      </div>
    </footer>
  </body>
</html>