<?php

 require 'koneksi.php';
if($_GET['id'] == 'login'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $row = $koneksi->prepare("SELECT * FROM login WHERE username = ? AND password = md5(?)");
    
    $row->execute(array($user,$pass));
    
    $hitung = $row->rowCount();

    if($hitung > 0)
    {

        session_start();
        $hasil = $row->fetch();
        
        $_SESSION['USER'] = $hasil;

        if($_SESSION['USER']['level'] == 'admin')
        {
            echo '<script>alert("Login Sukses");window.location="../admin/index.php";</script>';    
        }
<<<<<<< HEAD
        
        else
        {
            echo '<script>alert("Login Sukses");window.location="./admin/index.php;</script>'; 
=======
        else
        {
            echo '<script>alert("Login Sukses");window.location="../index.php";</script>'; 
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855
        }

    }
    else
    {
        echo '<script>alert("Login Gagal");window.location="../index.php";</script>'; 
    }
}
<<<<<<< HEAD
                $row = $koneksi->prepare("SELECT * FROM akun_karyawan WHERE username = ? AND password = md5(?)");
                    
                $row->execute(array($user,$pass));

                $hitung = $row->rowCount();

                if($hitung > 0)
                {

                    session_start();
                    $hasil = $row->fetch();
                    
                    $_SESSION['USER'] = $hasil;
                    if($_SESSION['USER']['level'] == 'karyawan')
                    {
                        echo '<script>alert("Login Sukses");window.location="../admin/karyawan.php";</script>'; 
                    }
                   

                }
                else
                {
                    echo '<script>alert("Login berhasil");window.location="../index.php";</script>'; 
                }


if($_GET['id'] == 'daftar')
{
    $data[] = $_POST['nama'];
    $data[] = $_POST['jenis_kelamin'];
    $data[] = $_POST['alamat'];
    $data[] = $_POST['telepon'];
    $data[] = $_POST['email'];
    $data[] = $_POST['user'];
    $data[] = md5($_POST['pass']);
    $data[] = 'karyawan';

    $row = $koneksi->prepare("SELECT * FROM akun_karyawan WHERE username = ?");
    
    $row->execute(array($_POST['user']));
    
    $hitung = $row->rowCount();

    if($hitung > 0)
    {
        echo '<script>alert("Daftar Gagal, Username Sudah digunakan ");window.location="../index.php";</script>'; 
    }
    else
    {

        $sql = "INSERT INTO `akun_karyawan`(`nama`,`jenis_kelamin`,`alamat`,`telepon`,`email`, `username`, `password`, `level`)
                VALUES (?,?,?,?,?,?,?,?)";
        $row = $koneksi->prepare($sql);
        $row->execute($data);
    
        echo '<script>alert("Daftar Sukses Silahkan Login");window.location="../index.php";</script>'; 
    }


}



=======
>>>>>>> 16789c06424094352e6374f0ecd048cdb639d855

if($_GET['id'] == 'daftar')
{
    $data[] = $_POST['nama'];
    $data[] = $_POST['user'];
    $data[] = md5($_POST['pass']);
    $data[] = 'pengguna';

    $row = $koneksi->prepare("SELECT * FROM login WHERE username = ?");
    
    $row->execute(array($_POST['user']));
    
    $hitung = $row->rowCount();

    if($hitung > 0)
    {
        echo '<script>alert("Daftar Gagal, Username Sudah digunakan ");window.location="../index.php";</script>'; 
    }
    else
    {

        $sql = "INSERT INTO `login`(`nama_pengguna`, `username`, `password`, `level`)
                VALUES (?,?,?,?)";
        $row = $koneksi->prepare($sql);
        $row->execute($data);
    
        echo '<script>alert("Daftar Sukses Silahkan Login");window.location="../index.php";</script>'; 
    }


}

if($_GET['id'] == 'booking')
{
    $total = $_POST['total_harga'] * $_POST['lama_sewa'];
    $unik  = random_int(100,999);
    $total_harga = $total+$unik;

    $data[] = time();
    $data[] = $_POST['id_login'];
    $data[] = $_POST['id_ps'];
    $data[] = $_POST['ktp'];
    $data[] = $_POST['nama'];
    $data[] = $_POST['alamat'];
    $data[] = $_POST['no_tlp'];
    $data[] = $_POST['tanggal'];
    $data[] = $_POST['lama_sewa'];
    $data[] = $total_harga;
    $data[] = "Belum Bayar";
    $data[] = date('Y-m-d');

    $sql = "INSERT INTO booking (kode_booking, 
    id_login, 
    id_ps, 
    ktp, 
    nama, 
    alamat, 
    no_tlp, 
    tanggal, lama_sewa, total_harga, konfirmasi_pembayaran, tgl_input) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $row = $koneksi->prepare($sql);
    $row->execute($data);

    echo '<script>alert("Anda Sukses Booking silahkan Melakukan Pembayaran");
    window.location="../bayar.php?id='.time().'";</script>'; 
}

if($_GET['id'] == 'konfirmasi')
{

    $data[] = $_POST['id_booking'];
    $data[] = $_POST['no_rekening'];
    $data[] = $_POST['nama'];
    $data[] = $_POST['nominal'];
    $data[] = $_POST['tgl'];

    $sql = "INSERT INTO `pembayaran`(`id_booking`, `no_rekening`, `nama_rekening`, `nominal`, `tanggal`) 
    VALUES (?,?,?,?,?)";
    $row = $koneksi->prepare($sql);
    $row->execute($data);

    $data2[] = 'Sedang di proses';
    $data2[] = $_POST['id_booking'];
    $sql2 = "UPDATE `booking` SET `konfirmasi_pembayaran`=? WHERE id_booking=?";
    $row2 = $koneksi->prepare($sql2);
    $row2->execute($data2);

    echo '<script>alert("Kirim Sukses , Pembayaran anda sedang diproses");history.go(-2);</script>'; 
}