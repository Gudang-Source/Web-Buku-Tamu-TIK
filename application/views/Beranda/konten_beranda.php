<!-- Main content -->
<section class="content">
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
                                <span class="info-box-number"><?php $aktifuser ?></span>
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
                                <span class="info-box-number"><?php $offlineuser ?></span>
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
                                <span class="info-box-number">0</span>
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
$aktifuser = $arrlength;
$offlineuser = 100 - $aktifuser;
?>
<?php
  foreach ($data->result() as $row) {
    $pc[] = $row->mac_address;
}?>
                    <div class="box-body table-responsive no-padding">
                        <table class="table">
                            <tbody align="center">
                                <tr>
                                    <!-- PC 1 -->
                                    <td>
                                        <?php                              
                                  if ($pc[0] == '0') {
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
                                        $aktifpc1 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc1 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc1 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <!-- PC 2 -->
                                    <td>
                                        <?php                                
                                  if ($pc[1] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[1] == $mac[$x]){
                                        $aktifpc2 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc2 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc2 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    <!-- PC 3 -->
                                    <td>
                                        <?php                                
                                  if ($pc[2] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[2] == $mac[$x]){
                                        $aktifpc3 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc3 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc3 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <!-- PC 4 -->
                                    <td>
                                        <?php                               
                                  if ($pc[3] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[3] == $mac[$x]){
                                        $aktifpc4 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc4 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc4 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    <!-- PC 5 -->
                                    <td>
                                        <?php                               
                                  if ($pc[4] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[4] == $mac[$x]){
                                        $aktifpc5 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc5 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc5 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <!-- PC 6 -->
                                    <td>
                                        <?php                               
                                  if ($pc[5] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[5] == $mac[$x]){
                                        $aktifpc6 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc6 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc6 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    <!-- PC 7 -->
                                    <td>
                                        <?php                               
                                  if ($pc[6] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[6] == $mac[$x]){
                                        $aktifpc7 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc7 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc7 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <!-- PC 8 -->
                                    <td>
                                        <?php                              
                                  if ($pc[7] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[7] == $mac[$x]){
                                        $aktifpc8 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc8 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc8 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    <!-- PC 9 -->
                                    <td>
                                        <?php                               
                                  if ($pc[8] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[8] == $mac[$x]){
                                        $aktifpc9 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc9 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc9 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <!-- PC 10 -->
                                    <td>
                                        <?php                                
                                  if ($pc[9] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[9] == $mac[$x]){
                                        $aktifpc10 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc10 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc10 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                        <?php                               
                                  if ($pc[10] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc11 == $mac[$x]){
                                        $aktifpc[10] = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc11 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc11 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>

                                    <td>
                                        <?php                              
                                  if ($pc[11] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[11] == $mac[$x]){
                                        $aktifpc12 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc12 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc12 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    <td>
                                        <?php                                 
                                  if ($pc[12] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[12] == $mac[$x]){
                                        $aktifpc13 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc13 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc13 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>

                                    <td>
                                        <?php                                 
                                  if ($pc[13] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[13] == $mac[$x]){
                                        $aktifpc14 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc14 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc14 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    <td>
                                        <?php                                
                                  if ($pc[14] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[14] == $mac[$x]){
                                        $aktifpc15 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc15 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc15 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>

                                    <td>
                                        <?php                                
                                  if ($pc[15] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[15] == $mac[$x]){
                                        $aktifpc16 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc16 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc16 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    <td>
                                        <?php                                 
                                  if ($pc[16] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[16] == $mac[$x]){
                                        $aktifpc17 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc17 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc17 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    
                                    <td>
                                        <?php                                 
                                  if ($pc[17] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[17] == $mac[$x]){
                                        $aktifpc18 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc18 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc18 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    <td>&nbsp</td>
                                    
                                    <td>
                                        <?php                              
                                  if ($pc[18] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[18] == $mac[$x]){
                                        $aktifpc19 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc19 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc19 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
                                    
                                    <td>
                                        <?php                                 
                                  if ($pc[19] == '0') {
                                    ?>
                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_broken.png' width="50" height="50">
                                            <?php }
                                  else {
                                    ?>
                                                <?php
                                    for ($x=0; $x <$arrlength; $x++){
                                      ?>
                                                    <?php
                                      if ($pc[19] == $mac[$x]){
                                        $aktifpc20 = 'pc_online.png';
                                        break;                                                                            
                                      }
                                      else {
                                        $aktifpc20 = 'pc_offline.png';
                                      } ?>
                                                        <?php } ?>
                                                            <img src='http://localhost/Bukutamu-TIK/assets/dist/img/<?php echo $aktifpc20 ?>' width="50" height="50">
                                                            <?php } ?>
                                    </td>
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