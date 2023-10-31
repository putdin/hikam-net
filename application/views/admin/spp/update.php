<?= form_open_multipart(base_url('admin/index/update_spp/' . $spp->id_spp));
?>
<div class="col-md-8">
    <div class="card shadow mb-4">
        <div class="card-header">
            <?= $title; ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label>Paket</label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="tahun" class="form-control" placeholder="Contoh : 5 Mbps"
                            value="<?= $spp->tahun; ?>" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label>Harga</label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="nominal" class="form-control" placeholder="Contoh : 150000 "
                            value="<?= $spp->nominal; ?>">
                    </div>
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i>
                            Update</button>
                    </div>
                </div>
            </div>
            <?= form_close();
            ?>
        </div>
    </div>
</div>