<div class="container mt-5">
    <div class="col-6">
        <h3>List Students</h3>
        <?php foreach ($data['mahasiswa'] as $mhs): ?>
        <ul>
            <li><?= $mhs['name'] ?></li>
            <li><?= $mhs['nim'] ?></li>
            <li><?= $mhs['major'] ?></li>
        </ul>
        <?php endforeach; ?>
    </div>
</div>