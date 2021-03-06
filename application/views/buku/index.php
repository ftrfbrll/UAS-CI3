<section>
	<div class ="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-danger">
					<div class="box-header">
					<h3 class="box-title">Daftar Buku</h3>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul Buku</th>
									<th>Pengarang</th>
									<th>Tahun Terbit</th>
									<th>Kategori</th>
									<th>ISBN</th>
									<th>Jumlah Buku</th>
									<th>Aksi</th>
								</tr>
							</thead> 
							<tbody>
								<?php
								foreach ($show as $key => $data)
								{
									?>
									<tr>
										<td><?=$key+1;?></td>
										<td><?=$data->judul_buku;?></td>
										<td><?=$data->pengarang;?></td>
										<td><?=$data->tahun_terbit;?></td>
										<td><?=$data->nama_kategori;?></td>
										<td><?=$data->isbn;?></td>
										<td><?=$data->jumlah_buku;?></td>
										<td>
											<a href="#" class="btn btn-xs btn-primary">Detail</a>
											<a href="<?=site_url('buku/edit/'.$data->id_buku);?>" class="btn btn-xs btn-warning">Edit</a>
											<a href="<?=site_url('buku/delete/'.$data->id_buku);?>" class="btn btn-xs btn-danger">Hapus</a>
										</td>
									</tr>
									<?php
								}
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Judul Buku</th>
									<th>Pengarang</th>
									<th>Tahun Terbit</th>
									<th>Kategori</th>
									<th>ISBN</th>
									<th>Jumlah Buku</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>