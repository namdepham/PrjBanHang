<section class="content mt-5">
		<form action="index.php?act=addsp" method="POST" role="form" enctype="multipart/form-data">
			<hr>
			<legend class="text-center">Form Add</legend>

			<!-- <div class="form-group">
				<label for="">ID : </label>
				<input disabled type="text" class="form-control" name="id">
			</div> -->
			<div class="form-group">
				<label for="">ID danh mục :</label>
				<select name ="iddm">
					<?php
						
							foreach ($listdm as $dm) {
								extract($dm);
								echo '<option value = "'.$id.'">'.$name.'</option>';
							}
							
						
					?>
					
				</select>
			</div>
			<div class="form-group">
				<label for="">Tên sản phẩm :</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label for="">Giá :</label>
				<input type="text" class="form-control" name="price">
			</div>
			<div class="form-group">
				<label for="">Hình ảnh :</label>
				<input type="file" class="form-control" name="image">
			</div>
			<div class="form-group">
				<label for="">Mô tả :</label><br/>
				<textarea cols="1000" name="mota"></textarea>
			</div>
			
			<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="Thêm mới" name="add" />
			<button class="btn btn-primary" type ="reset">Nhập lại</button>
			<button class="btn btn-primary" value="list" ><a  style="text-decoration: none;color: white;" href="index.php?act=listsp">Danh sách</a></button>
			</div>
			<?php
				if(isset($thongbao)&&$thongbao!=""){
					echo $thongbao;
				} 
			?>
		</form>
	</section>