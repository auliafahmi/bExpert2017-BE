<?php
echo $_COOKIE['nama'] . "<br>";
if(isset($_COOKIE['data'])){
    echo $_COOKIE['data'];
}

setcookie("nama", "Denny Chandra", time()-60, "/","", 0);
setcookie("data", "12345678", time()-60);
?>