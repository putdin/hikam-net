<div class="col-md-8">
    <div class="card shadow mb-4">
        <div class="card-header">
            Tambah IP Baru
        <div class="card-body">
            <?= form_open_multipart(base_url('admin/siswa/create_kel'));
			?>
            <div class="row">
                <div class="col-md-3">
                    <label>IP <span class="text-danger">*</span></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">

                        <input type="text" name="nama_kelas" class="form-control" placeholder="Contoh : 192.168.1.1"
                            value="<?= set_value('nama_kelas') ?>">
                        <?= form_error('nama_kelas', '<span class="text-danger">', '</span>'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <label>ODP <span class="text-danger">*</span></label>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="kompetensi_keahlian" class="form-control"
                            placeholder="Contoh : ODP 1" value="<?= set_value('kompetensi_keahlian') ?>">
                        <?= form_error('kompetensi_keahlian', '<span class="text-danger">', '</span>'); ?>
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