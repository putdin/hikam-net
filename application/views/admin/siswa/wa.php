<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#wa<?= $siswa->nisn; ?>">
    <i class="fa fa-close"></i> Wa
</button>
<div class="modal modal-danger fade" id="wa<?= $siswa->nisn; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Mengirim Pesan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-window-close"></i></span></button>
            </div>
            <div class="modal-body">
                <p>Pelanggan YTH atas nama <b><?= $siswa->nama ?></b></p>
                <p>Dimohon untuk melakukan pembayaran internet dengan jumlah Rp.<b><?$tahun-$nominal?></b></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal"><i class="fa fa-close"></i>
                    Batal</button>
                <a href="<?= base_url('admin/siswa/delete_sis/' . $siswa->nisn) ?>" class="btn btn-danger pull-right"><i
                        class="fa fa-close"></i> Ya, Hapus Data</a>
            </div>

        </div>
    </div>
</div>
</div>