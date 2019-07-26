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
            <div class="box box-warning">
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
            <div class="box box-warning">
                <div class="box-header">
                    <i class="fa fa-tv" aria-hidden="true"></i>
                    <h3 class="box-title text-center">Daftar Komputer</h3>
                </div>

                
                    <div class="box-body table-responsive no-padding">
                        <table class="table">
                            <tbody align="center">
                                <tr>
                                    <!-- PC 1 -->
                                    <td>
                                        <?php                              
                                  if ($status[0] == 2) {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[0] == $mac[$x]){
                                        $status_id = $pc_id[0];
                                        $status=$this->db->query("UPDATE `pc` SET `status_pc` = '1' WHERE `pc`.`id` = $status_id");
                                        $aktifpc1 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $status_id = $pc_id[0];
                                        $status=$this->db->query("UPDATE `pc` SET `status_pc` = '0' WHERE `pc`.`id` = $status_id");
                                        $aktifpc1 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc1 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <!-- Break -->
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
                                <tr>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td>&nbsp</td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                    <td><img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50"></td>
                                </tr>
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