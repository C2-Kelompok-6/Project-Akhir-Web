<style>
  /* Warna latar belakang dan teks */
  body {
    background-color: #f1f1f1;
    color: #444;
  }

  /* Warna tombol */
  .btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
  }

  /* Style untuk form */
  .form-box {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  .form-box label {
    font-size: 16px;
    font-weight: bold;
  }

  .form-box input,
  .form-box select,
  .form-box textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
  }

  .form-box input:focus,
  .form-box select:focus,
  .form-box textarea:focus {
    outline: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  }
</style>

<div class="form-box">
  <h3>Daftar Karyawan</h3>
  <form method="post" action="koneksi/proses.php?id=daftar">
    <div class="form-group">
      <label for="nama">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" id="nama" required>
    </div>
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea name="alamat" class="form-control" id="alamat" required></textarea>
    </div>
    <div class="form-group">
      <label for="telepon">Nomor Telepon</label>
      <input type="text" name="telepon" class="form-control" id="telepon" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="user" class="form-control" id="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="pass" class="form-control" id="password" required>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Daftar</button>