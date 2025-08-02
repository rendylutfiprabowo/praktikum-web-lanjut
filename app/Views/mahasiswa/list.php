<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>


<div class="p-4">
    <h3>Data Mahasiswa</h3>
    <br><br>
    <a href="/create" type="button" class="btn btn-primary"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah Data</a>
    <br><br>
    <table class=" table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NPM</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">DESKRIPSI</th>
                <th scope="col">CREATED_AT</th>
                <th ccope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>

                    <th scope="row"><?= $no ?></th>
                    <td><?= $mhs['npm'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['alamat'] ?></td>
                    <td><?= $mhs['deskripsi'] ?></td>
                    <td><?= $mhs['created_at'] ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <form action="/delete/<?= $mhs['id'] ?>" method="post">
                                <input type="hidden" name="_methode" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endsection('content'); ?>