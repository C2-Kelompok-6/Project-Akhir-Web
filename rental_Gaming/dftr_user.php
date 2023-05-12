<div class="container">
  <form method="post" action="koneksi/proses.php?id=daftar" class="form-daftar">
    <h2>Daftar Pengguna</h2>
    <div class="form-group">
      <label for="nama">Nama Pengguna</label>
      <input type="text" name="nama" class="form-control" id="nama" required>
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
    </div>
  </form>
</div>

<style>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f7f7f7;
  }

  .form-daftar {
    max-width: 400px;
    width: 100%;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }

  h2 {
    margin-bottom: 30px;
    text-align: center;
    color: #333;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    color: #555;
  }

  .form-control {
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    line-height: 1.5;
    color: #555;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .form-control:focus {
    border-color: #66afe9;
    outline: 0;
    box-shadow: none;
  }

  .btn-primary {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .btn-primary:hover {
    background-color: #0069d9;
  }
</style>
