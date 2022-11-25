<?php
if( isset($_GET["npsn"])){
    $npsn = $_GET["npsn"];

    $db_host    = "localhost";
    $db_user    = "root";
    $db_pass    = "";
    $db_name    = "db_sekolah";

    //koneksi
    $connect  = new mysqli($db_host, $db_user, $db_pass, $db_name);

    $sql = "DELETE FROM data_sekolah WHERE npsn=$npsn";
    $connect->query($sql);
}
header("location: /utscrud5/index.php");
exit;
?>