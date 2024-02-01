<div class="content-wrapper">
	<section class="content">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Thêm sản phẩm</h1>
					</div>
				</div>
			</div>
			<?php
			if (is_array($sanpham)) {
				extract($sanpham);
			}
			$hinhpath = "../upload/" . $img;
			if (is_file($hinhpath)) {
				$hinh = "<img src='" . $hinhpath . "' height='80'>";
			} else {
				$hinh = "no photto";
			}
			?>
		</div>
		<section class="content">
			<div class="container-fluid">
				<div class="card card-cus">
					<div class="card-body">
						<form class="form-horizontal" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $id_sanpham ?>">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Danh mục<span>*</span></label>
										<div class="col-sm-4">
											<select name="iddm" class="form-control select2 top-cat">
												<?php
												foreach ($listdanhmuc as $danhmuc) {
													extract($danhmuc);
													echo '<option value="' . $id . '">' . $name . '</option>';
												};
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Tên sản phẩm <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" name="tensp" class="form-control" value="<?php echo $ten_sanpham ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Giá <br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
										<div class="col-sm-4">
											<input type="text" name="giasp" class="form-control" value="<?php echo $gia ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Giá sale <br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
										<div class="col-sm-4">
											<input type="text" name="giasale" class="form-control" value="<?php echo $gia_sale ?>">
										</div>
									</div>

									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Ảnh đại diện <span>*</span></label>
										<div class="col-sm-4" style="padding-top:4px;">
											<input type="file" name="hinh">

										</div>
									</div>
									<?php echo $hinh ?>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Description</label>
										<div class="col-sm-8">
											<textarea name="mota" class="form-control" cols="30" rows="10" id="editor1"><?php echo $mo_ta ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Is Active?</label>
										<div class="col-sm-8">
											<select name="trangthai" class="form-control" style="width:auto;">
												<option value="0">No</option>
												<option value="1">Yes</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-6">
											<input class="btn btn-success pull-left" type="submit" name="capnhat" value="Gửi">
										</div>
									</div>

								</div>
								<?php
								if (isset($thongbao) && ($thongbao != "")) {
									echo $thongbao;
								}
								?>
						</form>

					</div>
				</div>
			</div>
</div>
</div>

</form>

</div>
</div>
</div>
</section>
</section>
</div>