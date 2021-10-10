<?php
    require 'data.php';

    //Mengecek apakah data sudah di submit
    if(isset($_POST["submit"])){
        edit($_POST);
        //Memunculkan pop up saat sudah di submit dan kembali ke halaman utama
        echo "
                <script>
                    alert('Profil Berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
    }

    //Fungsi Edit untuk mengubah data
    function edit($input){
        global $data;

        //Jika Foto Profil tidak diisi/ dibiarkan saja
        if($_FILES["profile_pict"]["name"] == ''){
            $photo = $data['profile_pict'];
        }
        else{
            $photo = $_FILES["profile_pict"]["name"];
        }

        //Data Yang Akan Diubah
        $txt = "
            <?php
                \$data = [
                    'firstname' => '{$input["firstname"]}',
                    'lastname' => '{$input["lastname"]}',
                    'username' => '{$input["username"]}',
                    'facebook' => '{$input["facebook"]}',
                    'instagram' => '{$input["instagram"]}',
                    'github' => '{$input["github"]}',
                    'profile_pict' => '{$photo}',
                    'bio' => '{$input["bio"]}'
                ];
            ?>
        ";
        
        //Mengubah database pada data.php
        $file = fopen("data.php", "w");
        fwrite($file, $txt);
        fclose($file);
        //Upload foto yang dipilih ke dalam folder img
        move_uploaded_file($_FILES["profile_pict"]["tmp_name"], 'img/' . $_FILES["profile_pict"]["name"]);
    }
?>