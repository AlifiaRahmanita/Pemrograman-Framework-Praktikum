<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <h1>Data Genre</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama Genre</th>
                        <th>Action</th>
                    </tr>

                    <?php $i = 1; 
                    foreach ($semuaGenre as $Genre): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $Genre["nama_genre"] ?></td>
                            <td>
                                <a href="" class="btn btn-success">Update</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    
                </table>
            </div>

        </div>
</div>
    <?= $this->endSection() ?>