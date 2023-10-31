<div class="col-md-8">
    <div class="card shadow mb-4">
        <div class="card-header">
            Tambah Paket
        </div>
        <div class="card-body">

            <?= form_open_multipart(base_url('admin/index/create_spp'));
            ?>

            <div class="row">
                <div class="col-md-3">
                    <label>Paket <span class="text-danger">*</span></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">

                        <input type="text" name="tahun" class="form-control" placeholder="Contoh : 50 Mbps"
                            value="<?= set_value('tahun') ?>">
                        <?= form_error('tahun', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <label>Harga <span class="text-danger">*</span></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="nominal" class="form-control" placeholder="Contoh : 250000"
                            value="<?= set_value('nominal') ?>">
                        <?= form_error('nominal', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i>
                            Simpan</button>
                    </div>
                </div>
            </div>
            <?= form_close();
            ?>
        </div>
    </div>
</div>