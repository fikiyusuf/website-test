<!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Posting Table</h4>

                </div>

            </div>
			<div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                           Tambah Artikel Disini
                                <div class="pull-right" >
                                    <div class="dropdown">
										<button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
											<span class="glyphicon glyphicon-cog"></span>
											<span class="caret"></span>
										</button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url() ?>admin/artikel/tambah" class="tambah">Tambah Artikel</li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url();?>login">Logout</a></li>
									</ul>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <h3>POSTING LIST</h3>
						</hr>
						Check and do your posting here, keep posting!
                    </div>
                </div>
            </div>
			
			
					
            <div class="row">
			
                 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Status</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
									   <?php foreach($artikel as $list) { ?>
                                        <tr>
											<td>
												<a href="<?php echo base_url() ?>home/read/<?php echo $list['slug'] ?>" target="_blank">
												<?php echo $list['judul']; ?></a>	
                                            </td>
											<td>
												<label class="label label-info" ><?php echo $list['status_artikel'];?></label>
                                            <td>
                                                <?php echo $list['nama'];?></label>
                                            </td>
                                            <td>
                                                <?php echo $list['tanggal'];?></label>
                                             <td> <a class="label label-warning" href="<?php echo base_url() ?>admin/artikel/edit/<?php echo $list['id_artikel'] ?>">EDIT</a> <a class="btn btn-xs btn-danger" href="<?php echo base_url() ?>admin/artikel/delete/<?php echo $list['id_artikel'] ?>">DELETE</a></a> </td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                </div>
			</div>