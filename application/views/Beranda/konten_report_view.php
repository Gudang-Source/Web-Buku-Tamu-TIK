<section class="content">
<?php
foreach ($data->result() as  $row){
    $report_id[] = $row->id;
    $report_nama[] = $row->nama;
    $report_pcke[] = $row->nomor_pc;
    $report_ip[] = $row->ip;
    $report_mac[] = $row->mac_address;
    $report_tanggal[] = $row->tanggal;
}

?>
<!-- Content View -->
<div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-clipboard" aria-hidden="true"></i>
           <h3 class="box-title text-center">Rincian Penggunaan Komputer</h3>
           <br>
       </div>
       <table class="table">
        <thead align="center">
         <tr>
          <td><b>User Name</b></td>
          <td><b>Nomor Komputer</b></td>
          <td><b>IP Address</b></td>
          <td><b>Mac Address</b></td>
          <td><b>Tanggal</b></td>
         </tr>
        </thead>
        <tbody>
         <?php
        if(!empty($data)) {
         foreach ($data->result() as  $row) : ?>
         <td align="center"><?php echo $row->nama;?></td>
         <td align="center"><?php echo $row->nomor_pc;?></td>
         <td align="center"><?php echo $row->ip;?></td>
         <td align="center"><?php echo $row->mac_address;?></td>
         <td align="center"><?php echo $row->tanggal;?></td>
        </tbody>
        <?php endforeach ?>
        <?php }
        else { ?>
            <tr><td align="center">Tidak Ada Data</td></tr>
        <?php } ?>
        </tbody>
       </table>
    </div>
   </div>
</div>
</section>
