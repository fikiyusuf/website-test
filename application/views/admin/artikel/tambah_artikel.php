<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tambah Artikel</h1>
						<?php require_once('tinymce.php') ?>
<?php echo validation_errors(); ?>					
<form name="form1" method="post" action="<?php echo base_url(); ?>admin/artikel/tambah" class="myform">
  <div class="form-group">
    <label>Judul Artikel</label>
    <input class="form-control" name="judul" type="text" id="judul" size="70">
  </div>
  <div class="form-group">
    <label>Ringkasan Artikel</label>
    <textarea class="form-control" rows="3" name="ringkasan" id="ringkasan" cols="45" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Isi Artikel</label>
    <textarea class="form-control" rows="3" name="isi" id="isi" cols="45" rows="5"></textarea>
  </div>
  <div class="form-group">
  <p>
			<label for="status_artikel">Status Artikel</label>
			<select name="status_artikel" id="status_artikel">
				<option value="Publish">Publikasikan</option>
				<option value="Draft">Simpan sebagai draft</option>
			</select>
			<!-- UNTUK KEPERLUAN PENGUJIAN, ID USER KITA SET MANUAL DULU -->
			<input name="id_user" type="hidden" id="id_user" value="1"> 
			<!-- END ID USER -->
			<p>
			<input type="submit" name="submit" id="submit" value="Submit">
			<input type="reset" name="submit2" id="submit2" value="Reset">
			</p>
		</p>
		</div>
		</div>
		</div>
		<hr>
		<hr>