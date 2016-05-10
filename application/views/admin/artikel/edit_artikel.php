<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">UPDATE ARTIKEL</h1>
						<form name="form1" method="post" action="<?php echo base_url(); ?>admin/artikel/edit" class="myform">
  <?php require_once('tinymce.php') ?>
  <div class="form-group">
    <label>Judul Artikel</label>
    <input class="form-control" name="judul" type="text" id="judul" size="70" value="<?php echo $detail['judul'] ?>">
  </div>
  <div class="form-group">
    <label>Ringkasan Artikel</label>
    <textarea class="form-control" rows="3" name="ringkasan" id="ringkasan" cols="45" rows="5"><?php echo $detail['ringkasan'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Isi Artikel</label>
    <textarea class="form-control" rows="3" name="isi" id="isi" cols="45" rows="5"><?php echo $detail['isi'] ?></textarea>
  </div>
  <div class="form-group">
  <label>Status Artikel</label>
  <select class="form-control" name="status_artikel" id="status_artikel">
	<option value="Publish" <?php if ($detail['status_artikel'] == "Publish") { echo 'selected'; } ?>>Publikasikan</option>
	<option value="Draft" <?php if($detail['status_artikel'] == "Draft") { echo 'selected';} ?>>Simpan Sebagai Draft</option>
 </select>
 </div>
 <input name="id_user" type="hidden" id="id_user" value="1">
 <input name="id_artikel" type="hidden" id="id_artikel" value="<?php echo $detail['id_artikel'] ?>">
 <p>
 <input type="submit" name="submit" id="submit" value="Submit">
 <input type="reset" name="submit2" id="submit2" value="Reset">
 </p>

</form>
                    </div>
                </div>
				<hr>
				<hr>