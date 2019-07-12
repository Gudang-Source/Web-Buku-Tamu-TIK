<section class="content">
  <div class="row">
   <!-- ./col -->
    <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-clipboard" aria-hidden="true"></i>
           <h3 class="box-title text-center">Cek Laporan</h3>
       </div>
       <form action="<?php base_url() ?>Report/laporanterkini" method="POST" enctype="multipart/form-data">
       <div class="form-group">
					<label class="col-sm-2 control-label">Masukkan Tanggal</label>
					<div class="col-sm-10">
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right" name="tgl_report" id="datepicker">
						</div>
					</div>
				</div>
        <div>&nbsp</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-send"></i>&nbsp&nbspLihat</button>
				</div>
        </form>
    </div>
    </div>
 </div>

 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-clipboard" aria-hidden="true"></i>
           <h3 class="box-title text-center">Laporan Saat ini</h3>
       </div>
       <table class="table">
        <tbody>
         <tr>
          <td>User Name</td>
          <td>Mac Address</td>
          <td>IP Address</td>
          <td>Waktu</td>
          <td>Tanggal</td>
         </tr>
        </tbody>
       </table>
    </div>
   </div>
 </div>
</section>
