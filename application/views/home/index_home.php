<!-- Main Content -->
    <div class="container">
		<h3>Artikel Terbaru</h3>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
				<div class="post-preview">
                    <a href="post.html">
						<?php foreach ($artikel as $list) { ?>
                        <h3 class="post-title"> 
						<a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a>
                        </h3>
                        <p class="post-subtitle">    
                        <?php echo $list['ringkasan']; ?>
						</p>
						<p class="post-meta">Posted by <strong>admin</strong> on <?php echo $list['tanggal'];?>
						<?php } ?>
						</p>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <hr>