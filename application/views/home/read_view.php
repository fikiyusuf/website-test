<article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<h1><?php echo $detail['judul'] ?></h1>
				</div>
			</div>
			<hr>
			
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<?php echo $detail['isi'] ?>
			</div>
			</div>
			
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<p>Posted by <strong>admin</strong> <?php echo $detail['tanggal'] ?></p>
				</div>
			</div>
 <hr>
 <hr>
 <div class="anggota">
 <h3><b>Artikel Terbaru</b></h3>
 
 <ul>
 <?php foreach ($artikel as $list) { ?>
 <li><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></li>
 <?php } ?>
 </ul>
 </div>
</div>
</article>
