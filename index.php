<?php

require 'koneksi/koneksi.php';
if(empty($_SESSION['USER']))
{
    session_start();
}
include 'header.php';

?>
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php 
            $queryplaystation =  $koneksi -> query('SELECT * FROM playstation ORDER BY id_ps DESC')->fetchAll();
            $no =1;
            foreach($queryplaystation as $isi)
            {
        ?>
        <li data-target="#carouselId" data-slide-to="<?= $no;?>" class="<?php if($no == '1'){ echo 'active';}?>"></li>
        <?php $no++;}?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php 
            $no =1;
            foreach($queryplaystation as $isi)
            {
        ?>
        <div class="carousel-item <?php if($no == '1'){ echo 'active';}?>">
            <img src="assets/image/<?= $isi['gambar'];?>" alt="First slide" 
            class="img-fluid" style="object-fit:cover;width:100%;height:500px;">
        </div>
        <?php $no++;}?>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style=" background: #ddd">
                <div class="card-body">
                    <?php if($_SESSION['USER']){?>
                        Selamat Datang , <?php echo $_SESSION['USER']['nama_pengguna'];?>
                        <br/>
                        <br/>
                        <center>
                            <?php if($_SESSION['USER']['level'] == 'admin'){?>
                                <a href="admin/index.php" class="btn btn-primary mb-2 btn-block">Dashboard</a>
                            <?php }else{?>
                                <a href="blog.php" class="btn btn-primary mb-2 btn-block">Booking Sekarang !</a>
                            <?php }?>
                            <!-- Button trigger modal -->
                            <a href="admin/logout.php" class="btn btn-danger text-white btn-block">
                                Logout
                            </a>
                        </center>
                    <?php }else{?>
                    <form method="post" action="koneksi/proses.php?id=login">
                        <center><h5 class="card-title">Login</h5></center>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="user" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="pass" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <center><button class="btn btn-primary">Login</button>
                        <!-- Tambahkan kode HTML dan PHP ini di antara form login -->
<a class="btn btn-danger text-white" data-toggle="modal" data-target="#daftar">
   Daftar
</a>

<!-- Tambahkan modal untuk pilihan daftar sebagai pengguna atau karyawan -->
<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="daftarLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="daftarLabel">Pilihan Pendaftaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>Silakan pilih jenis pendaftaran Anda:</p>
            <div class="row">
               <div class="col-sm-6">
                  <a href="dftr_user.php" class="btn btn-primary btn-block">Daftar sebagai Pengguna</a>
               </div>
               <div class="col-sm-6">
                  <a href="dftr_karyawan.php" class="btn btn-primary btn-block">Daftar sebagai Karyawan</a>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
         </div>
      </div>
   </div>
</div>

                        
                        
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <?php 
                    $query =  $koneksi -> query('SELECT * FROM playstation ORDER BY id_ps DESC')->fetchAll();
                    $no =1;
                    foreach($query as $isi)
                    {
                ?>
                <br/>
                <br/>
                <div class="col-sm-4">
                    <div class="card">
                    <img src="assets/image/<?php echo $isi['gambar'];?>" class="card-img-top" style="height:200px;">
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
                                <i class="fa fa-close"></i> Tidak Tersedia
                            </li>

                        <?php }?>
                       
                        <li class="list-group-item bg-dark text-white">
                    
                     
                            <i class="fa fa-money"></i> Rp. <?php echo number_format($isi['harga']);?>/ day
                        </li>
                        </ul>
                        <div class="card-body">
                        <center><a href="booking.php?id=<?php echo $isi['id_ps'];?>" class="btn btn-success">Rental Sekarang</a>
                        <a href="detail.php?id=<?php echo $isi['id_ps'];?>" class="btn btn-info">Detail</a></center>
                        </div>
                    </div>
                </div>
                <?php $no++;}?>
            </div>
        </div>
    </div>

    </div>
</div>


            </div>
            
            </form>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>