<?php 
	if (!defined('BASEPATH')) exit('No direct script acess allowed');
						
	
?>
<div class="content-wrapper" style="padding:20px;">
	<section class="content-header">
		<h1>
			<i class="fa fa-edit" style="color:crimson"> </i> <?= $title_web; ?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-file-text"></i>&nbsp; <?= $title_web; ?></li>
		</ol>
	</section>
	<br>
	<section class="content panel">
		<?php if (!empty($this->session->flashdata())) {
			echo $this->session->flashdata('pesan');
		} ?>
		<div class="row panel-body">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<a href="<?= base_url("essay/show_edit/") ?>"><button class="btn btn-primary bg-merah teks-putih"><i class="fa fa-plus" aria-hidden="true"></i> </i> Tambah Essay</button></a>
						<br><br>
						<table id="example1" class="table table-bordered table-striped table" width="100%">
							<thead>
								<tr class=' bg-merah teks-putih' align="center">
									<th>No</th>
									<th>Judul</th>
									<th>Penulis</th>
									<th>Komentar</th>
									<th>Tanggal Posting</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($essay->result_array() as $isi) 
								{
									$tgl = $isi['tgl_post'];

									if ($tgl==NULL) 
									{
										$publikasi = "-";
									} 
									else 
									{
										$publikasi = date('d F Y', strtotime($tgl));
									}
									$idEssay = $isi['id_essay'] ;
									$anggota_id = $isi['id_praja'];
									$ang = $this->db->query("SELECT * FROM tbl_login WHERE anggota_id = '$anggota_id'")->row();
									$tung= $this->db->query("SELECT * FROM table_comment WHERE id_essay = '$idEssay'")->num_rows();

								?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= $isi['judul']; ?></td>
										<td><?= $isi['nama']; ?></td>
										<td align="center">Belum ada</td>
										<td align="center"><?= $publikasi ?></td>
										<td>
											<?php if ($this->session->userdata('level') == 'Petugas') { ?>
												<a href="<?= base_url('essay/show_edit/' . $isi['id_essay'] . '/' . $isi['id_praja']); ?>" class="btn btn-primary bg-biru btn-sm" title="detail pinjam">
													<i class="fa fa-eye"></i> Detail Essay</a>
												<a href="<?= base_url('essay/prosespinjam?id_essay=' . $isi['id_essay']); ?>" onclick="return confirm('Anda yakin menghapus essay ini ?');" class="btn btn-danger btn-sm" title="hapus pinjam">
													<i class="fa fa-trash"></i></a>
											<?php } else { ?>
												<a href="<?= base_url('essay/show_edit/' . $isi['id_essay']); ?>" class="btn btn-primary bg-biru btn-sm" title="detail pinjam">
													<i class="fa fa-eye"></i> Detail Essay</a>
											<?php } ?>
										</td>
										</td>
									</tr>
								<?php $no++;
								} ?>
							</tbody>
						</table>
							
					</div>
					<script>
						CKEDITOR.replace('essay')
					</script>
				</div>
			</div>
		</div>
</div>
</section>
</div>