<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Form Tambah Makan</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required type="text" id="nama" class="form-control <?php if (form_error('nama')) { ?>
                        is-invalid
                    <?php  } ?>" name="nama" value="<?= set_value('nama'); ?>">
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
                            <?php if ($p['id'] == set_value('jenis_makanan')) : ?>
                                <option value="<?= $p['id']; ?>" selected><?= $p['nama']; ?></option>
                            <?php else : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('jenis_makanan', '<small class="text-danger pl-1">', '</small>'); ?>
                    <input required type="hidden" id="set-poli" value="<?= set_value('jenis_makanan'); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="karbo">Karbo</label>
                    <input required type="number" id="karbo" class="form-control <?php if (form_error('karbo')) { ?>
                        is-invalid
                    <?php  } ?>" name="karbo" value="<?= set_value('karbo'); ?>">
                    <?= form_error('karbo', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="protein">Protein</label>
                    <input required type="number" id="protein" class="form-control <?php if (form_error('protein')) { ?>
                        is-invalid
                    <?php  } ?>" name="protein" value="<?= set_value('protein'); ?>">
                    <?= form_error('protein', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lemak">Lemak</label>
                    <input required type="number" id="lemak" class="form-control <?php if (form_error('lemak')) { ?>
                        is-invalid
                    <?php  } ?>" name="lemak" value="<?= set_value('lemak'); ?>">
                    <?= form_error('lemak', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kalori">Kalori</label>
                    <input required type="number" id="kalori" class="form-control <?php if (form_error('kalori')) { ?>
                        is-invalid
                    <?php  } ?>" name="kalori" value="<?= set_value('kalori'); ?>">
                    <?= form_error('kalori', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <input required type="number" id="berat" class="form-control <?php if (form_error('berat')) { ?>
                        is-invalid
                    <?php  } ?>" name="berat" value="<?= set_value('berat'); ?>">
                    <?= form_error('berat', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="img">Foto</label>
                    <div class="custom-file">
                        <input required type="file" class="custom-file-input" id="img" name="img">
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