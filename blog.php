<?php
session_start();
require 'koneksi/koneksi.php';
include 'header.php';

if(isset($_GET['status'])) {
    $status = strip_tags($_GET['status']);
    if($status == "Tersedia") {
        $query =  $koneksi->query('SELECT * FROM playstation WHERE status = "Tersedia" ORDER BY id_ps DESC')->fetchAll();
    } elseif($status == "Tidak Tersedia") {
        $query =  $koneksi->query('SELECT * FROM playstation WHERE status = "Tidak Tersedia" ORDER BY id_ps DESC')->fetchAll();
    } else {
        $query =  $koneksi->query('SELECT * FROM playstation ORDER BY id_ps DESC')->fetchAll();
    }
} else {
    $query =  $koneksi->query('SELECT * FROM playstation ORDER BY id_ps DESC')->fetchAll();
}
?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php 
            if(isset($_GET['status'])) {
                echo '<h4> Barang '.$_GET['status'].'</h4>';
            }
            ?>
            <div class="row mt-3">
            <?php 
                $no =1;
                foreach($query as $isi) {
            ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/image/<?php echo $isi['gambar'];?>" class="card-img-top" style="height:200px;object-fit:cover;">
                        <div class="card-body" style="background:#ddd">
                            <h5 class="card-title"><?php echo $isi['merk'];?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if($isi['status'] == 'Tersedia'){?>
                                <li class="list-group-item bg-primary text-white">
                                    <i class="fa fa-check"></i> Tersedia
                                </li>
                            <?php }else{?>
                                <li class="list-group-item bg-danger text-white">
                                    <i class="fa fa-close"></i> Tidak tersedia
                                </li>
                            <?php }?>
                            
                            <li class="list-group-item bg-dark text-white">
                                <i class="fa fa-money"></i> Rp. <?php echo number_format($isi['harga']);?>/ day
                        </li>
                    </ul>
                    <div class="card-body">
                        <center>
                            <a href="booking.php?id=<?php echo $isi['id_ps'];?>" class="btn btn-success">Rental Sekarang</a>
                            <a href="detail.php?id=<?php echo $isi['id_ps'];?>" class="btn btn-info">Detail</a>
                        </center>
                    </div>
                </div>
            </div>
            <?php $no++;}?>
        </div>
    </div>
</div>
</div>

<br>

<br>

<br>


<?php include 'footer.php';?>