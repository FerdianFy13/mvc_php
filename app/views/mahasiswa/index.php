<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info mb-2 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Insert Data
        </button>
        <h3>List Students</h3>
        <ul class="list-group">
        <?php foreach ($data['mahasiswa'] as $mhs): ?>
            <li class="list-group-item"><?= $mhs['name'] ?>
                <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs[
    'id'
] ?>" class="badge bg-danger float-end ms-1 text-decoration-none" onclick="return confirm('are you sure delete???')">Delete</a>
                <a href="<?= BASEURL ?>/mahasiswa/update/<?= $mhs[
    'id'
] ?>" class="badge bg-success float-end me-1 ms-1 text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs[
    'id'
] ?>">Update</a>
                <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs[
    'id'
] ?>" class="badge bg-primary float-end me-1 text-decoration-none">Details</a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModalLabels">Insert Data Students</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/mahasiswa/insert" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="form-group">
                <label for="major">Major</label>
                <select class="form-control" id="major" name="major">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning">Insert</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>