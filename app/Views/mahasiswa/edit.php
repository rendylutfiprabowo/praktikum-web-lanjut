<form action="/update/<?= $id?>" method="post">
    <div class="form-group">
        <label for="npm">NPM</label>
        <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm ?>">
    </div>
    <div class="form-group">
        <label for="nama">NAMA</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>">
    </div>
    <div class="form-group">
        <label for="alamat">ALAMAT</label>
        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat ?>">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>