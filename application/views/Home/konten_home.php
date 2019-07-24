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
                                <span class="info-box-number">10</span>
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
                                <span class="info-box-number">90</span>
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
                                foreach ($data->result() as $row) {
                                  $pc[] = $row->mac_address;
                                  } ?>
                <div class="box-body table-responsive no-padding">
                    <table class="table">
                        <tbody align="center">
                        <tr>
                                <td>
                                
                                <?php
                                  if ($pc[0] == '1') {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td> 
                                <td>
                                <?php
                                  $pc2 = 1; 
                                  if ($pc2 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                  
                                <td>&nbsp</td>
                                <td>
                                <?php
                                  $pc3 = 1; 
                                  if ($pc3 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                <td>
                                <?php
                                  $pc4 = 1; 
                                  if ($pc4 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                <td>&nbsp</td>
                                <td>
                                <?php
                                  $pc5 = 1; 
                                  if ($pc5 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                <td>
                                <?php
                                  $pc6 = 1; 
                                  if ($pc6 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                <td>&nbsp</td>
                                <td>
                                <?php
                                  $pc7 = 1; 
                                  if ($pc7 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                <td>
                                <?php
                                  $pc8 = 1; 
                                  if ($pc8 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                <td>&nbsp</td>
                                <td>
                                <?php
                                  $pc9 = 1; 
                                  if ($pc9 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
                                  <?php } ?>
                                </td>
                                <td>
                                <?php
                                  $pc10 = 1; 
                                  if ($pc10 == 1) {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_online.png' width="50" height="50">
                                  <?php }
                                  else {
                                    ?>
                                    <img src='http://localhost/Bukutamu-TIK/assets/dist/img/pc_offline.png' width="50" height="50">
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