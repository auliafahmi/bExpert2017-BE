<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $telpon = $_POST['telpon'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $gender = !empty($_POST['jkelamin']) ? $_POST['jkelamin'] : "L";
        $program = !empty($_POST['program']) ? $_POST['program'] : array();
        $pengalaman = $_POST['pengalaman'];
    }

  
?>