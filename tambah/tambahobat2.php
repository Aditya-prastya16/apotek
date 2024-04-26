<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<center>
    <h1>Tambah Obat</h1>
    <br></br>
    <table>
        <tr>
            <td>Id Obat</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Id Supllier</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Nama Obat</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Kategori obat</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Stok Obat</td>
            <td><input type="text"></td>
        </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text"></td>
            </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan Data Obat"></td>
        </tr>
    </table>
</center>
</body>
</html>