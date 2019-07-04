				<!-- Main content -->
		<section class="content">

				<div class="row">
						<div class="col-md-3">

								<!-- Profile Image -->
								<div class="box box-primary">
										<div class="box-body box-profile">
												<img class="profile-user-img img-responsive img-circle" src="<?php base_url() ?>assets/foto_profil/avatar5.png" alt="User profile picture">
												<h3 class="profile-username text-center">Administrator</h3>
										</div>
										<!-- /.box-body -->
								</div>
								<?php
								$info = $this->session->flashdata('info');
								if(!empty($info))
								{
									echo $info;
								}
								?>
						</div>
						<!-- /.col -->
						<div class="col-md-9">
								<div class="nav-tabs-custom">
										<ul class="nav nav-tabs">
												<li class="active"><a href="#DataAdmin" data-toggle="tab">Data Admin</a></li>
												<li><a href="#UbahPassword" data-toggle="tab">Ubah Kata Sandi</a></li>
										</ul>
										<div class="tab-content">
												<div class="active tab-pane" id="DataAdmin">
													<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
														<tbody>
															<tr>
																<td align="left" width='26%'><b>Nama Lengkap</b></td>
																<td>Administrator<!--<?php echo $nama->Nama_usr; ?>--></td>
															</tr>
															<tr>
																<td align="left"><b>Email</b></td>
																<td>-<!--<?php echo $nama->Email; ?>--></td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="tab-pane" id="UbahPassword">
													<form class="form-horizontal" action="<?php echo base_url(); ?>Profil/updatesandi" method="post" enctype="multipart/form-data">
														<div class="form-group">
																<label for="inputPassword" class="col-sm-2 control-label">Sandi Sekarang</label>
																<div class="col-sm-10">
																		<input type="password" class="form-control" id="inputOldPassword" name="OldPassword" placeholder="Kata Sandi Saat Ini" required>
																</div>
														</div>
														<div class="form-group">
																<label for="inputPassword" class="col-sm-2 control-label">Sandi baru</label>
																<div class="col-sm-10">
																		<input type="password" class="form-control" id="inputNewPassword" name="NewPassword" placeholder="Kata Sandi Baru" minlength="8" required>
																</div>
														</div>
														<div class="form-group">
																<label for="inputPassword" class="col-sm-2 control-label">Ketik ulang sandi baru</label>
																<div class="col-sm-10">
																		<input type="password" class="form-control" id="inputAgainNewPassword" name="AgainNewPassword" placeholder="Ulangi kata sandi baru" minlength="8" required>
																</div>
														</div>
															<div class="form-group">
																	<div class="col-sm-offset-2 col-sm-10">
																			<div class="checkbox">
																					<label>
																							<input type="checkbox"> Data yang saya input Sudah Benar
																					</label>
																			</div>
																	</div>
															</div>
															<div class="form-group">
																	<div class="col-sm-offset-2 col-sm-10">
																			<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
																	</div>
															</div>
													</form>
												</div>
												<!-- /.tab-pane -->
										</div>
										<!-- /.tab-content -->
								</div>
								<!-- /.nav-tabs-custom -->
						</div>
						<!-- /.col -->
				</div>
				<!-- /.row -->
		</section>
