<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Form Edit Jenis Makanan</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $jenis_makanan['id']; ?>">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required type="text" id="nama" class="form-control <?php if (form_error('nama')) { ?>
                        is-invalid
                    <?php  } ?>" name="nama" value="<?= $jenis_makanan['nama']; ?>" required>
                    <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary" name="tambah">Save</button>
                <a href="<?= base_url('master/jenismakanan'); ?>" type="button" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
</div>