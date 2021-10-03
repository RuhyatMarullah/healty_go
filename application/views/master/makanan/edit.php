<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Form Edit Makan</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $makan['id']; ?>">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" class="form-control <?php if (form_error('nama')) { ?>
                        is-invalid
                    <?php  } ?>" name="nama" value="<?= $makan['nama']; ?>" required>
                    <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_makanan">Jenis Makanan</label>
                    <select class="form-control jenis_makanan <?php if (form_error('jenis_makanan')) { ?>
                                is-invalid
                            <?php  } ?>" id="jenis_makanan" name="jenis_makanan" required>
                        <option value="">---pilih jenis makanan---</option>
                        <?php foreach ($jenis_makanan as $p) : ?>
                            <?php if ($p['id'] == $makan['id_jenis_makan']) : ?>
                                <option value="<?= $p['id']; ?>" selected><?= $p['nama']; ?></option>
                            <?php else : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('jenis_makanan', '<small class="text-danger pl-1">', '</small>'); ?>
                    <input type="hidden" id="set-poli" value="<?= set_value('jenis_makanan'); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="karbo">Karbo</label>
                    <input type="number" required id="karbo" class="form-control <?php if (form_error('karbo')) { ?>
                        is-invalid
                    <?php  } ?>" name="karbo" value="<?= $makan['karbo']; ?>">
                    <?= form_error('karbo', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="protein">Protein</label>
                    <input type="number" required id="protein" class="form-control <?php if (form_error('protein')) { ?>
                        is-invalid
                    <?php  } ?>" name="protein" value="<?= $makan['karbo']; ?>">
                    <?= form_error('protein', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lemak">Lemak</label>
                    <input type="number" required id="lemak" class="form-control <?php if (form_error('lemak')) { ?>
                        is-invalid
                    <?php  } ?>" name="lemak" value="<?= $makan['lemak']; ?>">
                    <?= form_error('lemak', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kalori">Kalori</label>
                    <input type="number" required id="kalori" class="form-control <?php if (form_error('kalori')) { ?>
                        is-invalid
                    <?php  } ?>" name="kalori" value="<?= $makan['kalori']; ?>">
                    <?= form_error('kalori', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="number" required id="berat" class="form-control <?php if (form_error('berat')) { ?>
                        is-invalid
                    <?php  } ?>" name="berat" value="<?= $makan['berat']; ?>">
                    <?= form_error('berat', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class=" col-md-6">
                <div class="form-group">
                    <input type="hidden" name="img_old" id="img_old" value="<?= $makan['foto']; ?>">
                    <label for="img">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img" name="img">
                        <label class="custom-file-label" for="img">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary" name="tambah">Save</button>
                <a href="<?= base_url('master/makan'); ?>" type="button" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
</div>