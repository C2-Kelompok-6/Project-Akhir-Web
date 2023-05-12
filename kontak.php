<?php
    session_start();
    require 'koneksi/koneksi.php';
    include 'header.php';
?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Kontak Kami
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">Nama Rental</div>
                        <div class="col-sm-8"><?= $info_web->nama_rental;?></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4">Telp</div>
                        <div class="col-sm-8"><?= $info_web->telp;?></div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">Alamat</div>
                        <div class="col-sm-8"><?= $info_web->alamat;?></div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">Email</div>
                        <div class="col-sm-8"><?= $info_web->email;?></div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">No Rekening</div>
                        <div class="col-sm-8"><?= $info_web->no_rek;?></div>
                    </div>
                    <div class="row mt-3">
    <div class="col-sm-4">Instagram</div>
    <div class="col-sm-8"><a href="https://www.instagram.com/irvanapdila/" target="_blank"><img src="https://tse4.mm.bing.net/th?id=OIP.JLrosTMFR2iPr-rqv6Cc8QHaHa&pid=Api&P=0" alt="Instagram" width="50" height="50"></a></div>
</div>

<div class="row mt-3">
    <div class="col-sm-4">Tiktok</div>
    <div class="col-sm-8"><a href="https://www.tiktok.com/@sshhaannjjuu?_t=8aTpM9ZJgBt&_r=1" target="_blank"><img src="https://tse4.mm.bing.net/th?id=OIP.UTM67lX-k2RZiQ5YTq0OPwHaEK&pid=Api&P=0" alt="Tiktok" width="50" height="50"></a></div>
</div>

<div class="row mt-3">
    <div class="col-sm-4">Facebook</div>
    <div class="col-sm-8"><a href="https://www.facebook.com/irvan.apdila/" target="_blank"><img src="https://tse2.mm.bing.net/th?id=OIP.UNUrkF9171aD5fI3vcAxHgHaDt&pid=Api&P=0" alt="Facebook" width="50" height="50"></a></div>
</div>

<div class="row mt-3">
    <div class="col-sm-4">WhatsApp</div>
    <div class="col-sm-8"><a href="https://wa.me/nomorwa/" target="_blank"><img src="https://example.com/path/to/whatsapp.png" alt="WhatsApp" width="50" height="50"></a></div>
</div>


                </div>
            </div> 
        </div>
    </div>
</div>
<br>
<br>
<br>
<?php include 'footer.php';?>
