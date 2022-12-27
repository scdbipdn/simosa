<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<?php
$bulan_tes = array(
	'01' => "Januari",
	'02' => "Februari",
	'03' => "Maret",
	'04' => "April",
	'05' => "Mei",
	'06' => "Juni",
	'07' => "Juli",
	'08' => "Agustus",
	'09' => "September",
	'10' => "Oktober",
	'11' => "November",
	'12' => "Desember"
);
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
						
                        <div class="row">
                            <div class="col-md-6" style='padding:70px'>
                                <h1 class="text-danger" style="font-weight:bold; font-size:46px;">Belum Ada Essay</h1>
                                <p>Klik <b class="text-danger">Buat Essay</b> untuk menambahkan Essay.</p>
                                <a href="<?= base_url("essay/show_edit/") ?>"><button class="btn btn-primary bg-merah teks-putih"><i class="fa fa-plus"> </i> Buat Essay</button></a>
                            </div>
                            <div class="col-md-6">
                                <center>
                                    <img width="80%" src="<?= base_url('assets_style/image/logo/jalan-kosong.png');?>" alt="">
                                </center>
                            </div>
						</div>

					</div>
				</div>
			</div>
		</div>
</div>
</section>
</div>