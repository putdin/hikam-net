<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?= $spp->id_spp; ?>">
    <i class="fa fa-trash-o"></i> Hapus
</button>
<div class="modal modal-danger fade" id="Delete<?= $spp->id_spp; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Menghapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus SPP <b><?= $spp->tahun ?></b>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal"><i class="fa fa-close"></i>
                    Batal</button>
                <a href="<?= base_url('admin/index/delete_spp/' . $spp->id_spp) ?>" class="btn btn-danger pull-right"><i
                        class="fa fa-trash-o"></i> Ya, Hapus data ini</a>
            </div>
        </div>
    </div>
</div>