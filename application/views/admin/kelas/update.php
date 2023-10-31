<div class="col-md-8">
    <div class="card shadow mb-4">
        <div class="card-header">
            <?= $title; ?>
        </div>
        <div class="card-body">
            <?= form_open_multipart(base_url('admin/siswa/update_kel/' . $kelas->id_kelas));
            ?>
            <div class="row">
                <div class="col-md-3">
                    <label>IP</label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="nama_kelas" class="form-control" placeholder="Contoh : 192.169.1.1"
                            value="<?= $kelas->nama_kelas; ?>" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label>ODP</label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="kompetensi_keahlian" class="form-control"
                            placeholder="Contoh : ODP 1" value="<?= $kelas->kompetensi_keahlian; ?>">
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