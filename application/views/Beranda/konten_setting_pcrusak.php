<section class="content">
 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
        <div class="box-header">
           <i class="fa fa-cogs" aria-hidden="true"></i>
           <h3 class="box-title text-center">Komputer Rusak</h3>
        </div>
        <div class="box-body">
        <form class="form-horizontal" action="<?php echo base_url(); ?>Setting_Pcrusak/updatepcrusak" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor PC</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPCNumb" name="inputPCNumb" placeholder="Nomor PC">
                  </div>
                </div>
                <div> &nbsp </div>
                <div class="box-footer">
						    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-send"></i>&nbsp;&nbsp;Simpan</button>
                </div>
        </form>
        </div>
    </div>
   </div>
 </div>
</section>
