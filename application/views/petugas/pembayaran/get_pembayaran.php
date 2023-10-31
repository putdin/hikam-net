<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <!-- <a href="<?= base_url('admin/index/create'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-newspaper"></i>
            </span>
            <span class="text">Tambah Artikel</span>
        </a> -->
    </div>
    <?php

	if ($this->session->flashdata('message')) {
		echo '<div class="alert alert-success">';
		echo $this->session->flashdata('message');
		echo '</div>';
	}

	?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="page-header">
                    <center>
                        <h3>CARI SISWA</h3>
                        <small class="text text-danger">NISN, NIS , atau Nama</small>
                    </center>
                </div>
                <table class="table">
                    <tr>
                        <?php echo form_open('index/search'); ?>
                        <td align="center">Search</td>
                        <td>:</td>
                        <td>
                            <input class="form-control" type="text" name="keyword" placeholder="..." required>
                        </td>
                        <td>
                            <button class="btn btn-success" type="submit" name="search_submit">Cari</button>
                        </td>
                        <?php echo form_close(); ?>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>
