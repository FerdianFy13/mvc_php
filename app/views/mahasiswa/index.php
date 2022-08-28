<div class="container mt-5">
    <div class="row">
    <div class="col-6">
        <h3>List Students</h3>
        <ul class="list-group">
        <?php foreach ($data['mahasiswa'] as $mhs): ?>
            <li class="list-group-item d-flex justify-content-between align-items-start"><?= $mhs[
                'name'
            ] ?>
                <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs[
    'id'
] ?>" class="badge bg-primary text-decoration-none ">Details</a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
    </div>
</div>