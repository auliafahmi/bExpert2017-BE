<?php
error_reporting(E_ERROR);
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $telpon = $_POST['telpon'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $gender = !empty($_POST['jkelamin']) ? $_POST['jkelamin'] : "L";
        $program = !empty($_POST['program']) ? $_POST['program'] : array();
        $pengalaman = $_POST['pengalaman'];

        if(empty($nama)){
            echo "nama harus diisi <br>";
            echo "<a href='form.html'>back</a>";
        }else if(empty($telpon)){
            echo "telpon harus diisi <br>";
            echo "<a href='form.html'>back</a>";
        }else if(empty($email)){
            echo "email harus diisi <br>";
            echo "<a href='form.html'>back</a>";
        }else if(empty($program)){
            echo "program harus diisi <br>";
            echo "<a href='form.html'>back</a>";
        }else{
            $strprogram = "";
            foreach($program as $idx => $value){
                $strprogram .= "$value";
            }
            echo "data form : <br>";
            echo "nama = $nama <br>";
            echo "telpon = $telpon <br>";
            echo "email = $email <br>";
            echo "alamat = $alamat <br>";
            echo "gender = $gender <br>";
            echo "program = $strprogram <br>";
            echo "pengalaman = $pengalaman <br>";
            if(isset($_FILES['foto'])){
                $errors = array();
                $file_name = $_FILES['foto']['name'];
                $file_size = $_FILES['foto']['size'];
                $file_tmp = $_FILES['foto']['tmp_name'];
                $file_type = $_FILES['foto']['type'];
                $file_ext = strtolower(end(explode('.', $file_name)));
                $expensions = array("jpeg", "jpg", "png");

                if(in_array($file_ext, $expensions) === false){
                    $errors[] = "please choose a JPG or PNG file.";
                }

                if($file_size > 2097152){
                    $errors[] = 'ukuran file max 2 MB';
                }
                if(empty($errors) == true){
                    move_uploaded_file($file_tmp, "images/" . $file_name);
                    echo "<img src='images/$file_name' width='100' height = '100'>";
                }else{
                    print_r($errors);
                }
            
                }
            }
        }