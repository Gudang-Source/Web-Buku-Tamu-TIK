<!-- Main content -->
<section class="content">
<?php
//Connect API Mikrotik
use PEAR2\Net\RouterOS;

require_once 'PEAR2/Autoload.php';

$util = new RouterOS\Util(
    $client = new RouterOS\Client('10.50.50.1', 'kp', 'kp')
);
$util->setMenu('/ip/hotspot/active');

foreach ($util->getAll() as $item) {
    $user[] = $item->getProperty('user');
    $ip[]   = $item->getProperty('address');
    $mac[]  = $item->getProperty('mac-address');
}
$arrlength = count($user);
?>
<!-- Get Mac-address from database -->
<?php
  foreach ($macdb->result() as $row) {
    $pc[] = $row->mac_address;
}?>
<!-- Get Status PC from database (Rusak atau Tidak) -->
<?php
  foreach ($statusdb->result() as $row) {
    $status[] = $row->status_pc;
}
$alluser = count($status);
?>


<!-- Get Aktif User DB -->
<?php
$aktif_user=0;
  for ($y=0; $y<$alluser; $y++){
    if ($status[$y] == 1){
      $aktif_user++;
    }
  }
?>
<!-- Get Offline User DB -->
<?php
$offline_user=0;
  for ($y=0; $y<$alluser; $y++){
    if ($status[$y] == 0){
      $offline_user++;
    }
  }
?>
<!-- Get PC Rusak DB -->
<?php
$pc_rusak=0;
  for ($y=0; $y<$alluser; $y++){
    if ($status[$y] == 2){
      $pc_rusak++;
    }
  }
?>
<!-- Get ID PC -->
<?php
  foreach ($pcdb->result() as $row) {
    $pc_id[] = $row->id;
}?>


<!-- Tampilan -->
    <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <h3 class="box-title text-center">Status Komputer</h3>
                </div>
                <!-- darisini -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-white">
            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="40" height="40">
            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp</span>
                                <span class="info-box-text">Aktif</span>
                                <span class="info-box-number"><?php echo $aktif_user ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-white">
            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="40" height="40">
            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp</span>
                                <span class="info-box-text">Tidak Aktif</span>
                                <span class="info-box-number"><?php echo $offline_user ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-white">
            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="40" height="40">
            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp</span>
                                <span class="info-box-text">Rusak</span>
                                <span class="info-box-number"><?php echo $pc_rusak ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header">
                    <i class="fa fa-tv" aria-hidden="true"></i>
                    <h3 class="box-title text-center">Daftar Komputer</h3>
                </div>

                
                    <div class="box-body table-responsive no-padding">
                        <table class="table">
                            <tbody align="center">
                            <?php
                                $pcke = 0;
                                for ($j=1;$j<=10;$j++){ ?> <tr>
                                <?php
                                    for ($k=1;$k<=5;$k++){
                                        for ($l=1;$l<=2;$l++){  ?>
                                            <td> 
                                            <?php             
                                            if ($status[$pcke] == 2) { ?>
                                            <button type="button" data-toggle="modal" data-target="#exampleModal<?php echo $pcke; ?>"><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50"></button>
                                            <div class="modal fade" id="exampleModal<?php echo $pcke; ?>" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" align="center">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title">Informasi Komputer</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" align="center">
                                                                <h5><b>KOMPUTER SEDANG TIDAK BISA DIGUNAKAN</b></h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Simpan</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php }
                                            else {
                                                for ($x=0; $x <$arrlength; $x++){      
                                                    if ($pc[$pcke] == $mac[$x]){
                                                        $statuspc = 1;
                                                        $status_id = $pc_id[$pcke];
                                                        $status=$this->db->query("UPDATE `pc` SET `status_pc` = '1' WHERE `pc`.`id` = $status_id");
                                                        $aktifpc1 = 'pc_online.png';
                                                        break;                                                                            
                                                    }
                                                    else {
                                                        $statuspc = 0;
                                                        $status_id = $pc_id[$pcke];
                                                        $status=$this->db->query("UPDATE `pc` SET `status_pc` = '0' WHERE `pc`.`id` = $status_id");
                                                        $aktifpc1 = 'pc_offline.png';
                                                    } 
                                                } ?> 
                                                
                                                <button type="button" data-toggle="modal" data-target="#exampleModal<?php echo $pcke; ?>"><img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc1 ?>' width="50" height="50"></button>
                                                <div class="modal fade" id="exampleModal<?php echo $pcke; ?>" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" align="center">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title">Informasi Komputer</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" align="left">
                                                                <h5><b>NOMOR KOMPUTER</b></h5>
                                                                <p><?php if ($statuspc == 1){
                                                                    echo $pc_id[$pcke];
                                                                } else {
                                                                    echo $pc_id[$pcke];
                                                                }?></p>
                                                                <hr>
                                                                <h5><b>USER</b></h5>
                                                                <p><?php if ($statuspc == 1){
                                                                    echo $user[$x]; 
                                                                } else {
                                                                    echo "-";
                                                                }?></p>
                                                                <hr>
                                                                <h5><b>IP</b></h5>
                                                                <p><?php if ($statuspc == 1){
                                                                    echo $ip[$x]; 
                                                                } else {
                                                                    echo "-";
                                                                }?></p>
                                                                <hr>
                                                                <h5><b>MAC-ADDRESS</b></h5>
                                                                <p><?php if ($statuspc == 1){
                                                                    echo $mac[$x]; 
                                                                } else {
                                                                    echo "-";
                                                                }?></p>
                                                                <hr>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Simpan</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                     <?php  } 
                                            $pcke = $pcke + 1;?>
                                            </td>
                                <?php   } ?><td> &nbsp </td>
                                <?php } ?> </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>