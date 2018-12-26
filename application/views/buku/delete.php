<section class="content">
	<div class="row"> 
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Edit Buku</h3>
				</div>
				<div class="box-body">
					<form action="<?=site_url('buku/create');?>" method="post" accept-charset="utf-8">
						<input type="hidden" name="id_buku" value="<?=$show->id_buku;?>">
						<div class="box-body">
							<div class="form-group">
								<label>Judul Buku</label>
								<input type="text" name="judul_buku" class="form-control" value="" placeholder="Masukan judul buku" required="required">
							</div>
						<div class="form-group">
							<label>Kategori</label>
							<select name="id_kategori" size="1" class="form-control">
							<?php
							foreach ($show_kategori as $key => $data_kategori) 
							{
								if($data_kategori->id_kategori == $show->id_kategori)
								{
								echo '<option selected="selected" value'.$data_kategori->id_kategori.'">'.$data_kategori->nama_kategori.'</option>';
								}
								else
								{
									echo '<option value="' .$data_kategori->id_kategori.'">'.$data_kategori->nama_kategori.'</option>';
								}
							}
							?>
							</select>
						</div>
						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" name="pengarang" class="form-control" value="<?=$show->pengarang;?>" placeholder="Masukan nama pengarang" required="required">
						</div>
						<div class="form-group">
							<label>Tahun Terbit</label>
							<input type="number" class="form-control" value="<?=$show->tahun_terbit;?>" name="tahun_terbit" min="0">
						</div>
						<div class="form-group">
							<label for="exampleInputtext1">Penerbit</label>
							<input type="text" name="penerbit" class="form-control" id="exampleInputtext1" placeholder="Penerbit" value="<?=$show->penerbit;?>" required="">
						</div>
						<div class="form-group">
							<label for="exampleInputtext1">ISBN</label>
							<input type="number" name="isbn" class="form-control" id="exampleInputtext1" placeholder="ISBN" value="<?=$show->isbn;?>" required="">
						</div>
						<div class="form-group">
							<label for="exampleInputtext1">Jumlah</label>
							<input type="number" name="jumlah_buku" class="form-control" id="exampleInputtext1" placeholder="0" value="<?=$show->Jumlah;?>" required min="0">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Rak</label>
							<select  name="lokasi" size="1" class="form-control">
								<option value="2" <?=$show->lokasi=='2'?' selected="selected"' : '';?> >Rak 2</option>
								<option value="3" <?=$show->lokasi=='3'?' selected="selected"' : '';?> >Rak 3</option>
								<option value="1" <?=$show->lokasi=='1'?' selected="selected"' : '';?> >Rak 1</option>
								<option value="4" <?=$show->lokasi=='4'?' selected="selected"' : '';?> >Rak 4</option>
								<option value="5" <?=$show->lokasi=='5'?' selected="selected"' : '';?> >Rak 5</option>
							</select>
						</div>
						<div class="box-footer">
							<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i>Batal</button>
							<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-send"></i>Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>