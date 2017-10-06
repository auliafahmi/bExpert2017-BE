<?php
    if(isset($_POST['submit'])){
        $faktur = $_POST['faktur'];
        $petugas = $_POST['petugas'];

        echo "Nomor Faktur : $faktur <br>Petugas : $petugas <br>";
        echo "Detail barang : <br>";
        for($i=0; $i<count($_POST['barang']); $i++){
            echo "Barang : {$_POST['barang'][$i]}, jumlah : {$_POST['jumlah'][$i]}," . "satuan : {$_POST['satuan'][$i]}, total : {$_POST['total'][$i]} <hr>";
        }
    }

?>