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

        <!-- Database PC -->
        <?php
//Get ID PC Number from database pc
foreach ($pcdb->result() as $row){
  $pc_id[] = $row->id;
}
$jumlahpc = count($pc_id);
?>
            <?php
//Get Mac-address from database pc
foreach ($macdb->result() as $row) {
  $pc_mac[] = $row->mac_address;
}
?>
                    <!-- Database Record -->
                    <?php
//Get Nama from database record
foreach ($checknamadb->result() as $row) {
  $nama_db[] = $row->nama;
}
?>
                        <?php
//Get Nomor_PC from database record
foreach ($checknomorpcdb->result() as $row) {
  $nomorpc_db[] = $row->nomor_pc;
}
?>
                            <?php
//Get ip from database record
foreach ($checkipdb->result() as $row) {
  $ip_db[] = $row->ip;
}
?>
                                <?php
//Get Mac-address from database record
foreach ($checkmacdb->result() as $row) {
  $mac_db[] = $row->mac_address;
}
?>
                                    <!-- Get User Login -->
                                    <?php
                                    $data_db = 0;
for ($x=0; $x<$arrlength; $x++){
  for ($k=0;$k<$jumlahpc;$k++){
    if ($pc_mac[$k]==$mac[$x]){
      $pcid_record = $pc_id[$k];
      break;
    } else {
      $pcid_record = 0;
    }
  }

  //Cek Mikrotik to Database Record
  for ($j=0; $j<$jumlah_id; $j++){
    if($nama_db[$j] == $user[$x] && $ip_db[$j] == $ip[$x] && $mac_db[$j] == $mac[$x]){
      $data_db = 1; //1 = ada, 0 =  tidak ada
      break;
    } else {
      $data_db = 0;
    }
  } 

  if($data_db == 1){
    //Data tidak masuk
    goto data_ada;
  } else {
    $username_record = $user[$x];
    $ip_record = $ip[$x];
    $mac_record = $mac[$x];
    $recordmasuk=$this->db->query("INSERT INTO `record` (`nama`, `nomor_pc`, `ip`, `mac_address`, `tanggal`) VALUES ('$username_record', '$pcid_record', '$ip_record', '$mac_record', CURRENT_TIMESTAMP)");
  }
  data_ada:
}
?>