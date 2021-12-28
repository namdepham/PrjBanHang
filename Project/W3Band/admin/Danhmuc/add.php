<section class="content mt-5">
		<form action="index.php?act=adddm" method="POST" role="form">
			<hr>
			<legend class="text-center">Form Add</legend>

			<div class="form-group">
				<label for="">ID : </label>
				<input disabled type="text" class="form-control" name="id">
			</div>
			<div class="form-group">
				<label for="">Tên danh mục :</label>
				<input type="text" class="form-control" name="name">
			</div>
			
			<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="Thêm mới" name="add" />
			<button class="btn btn-primary" type ="reset">Nhập lại</button>
			<button class="btn btn-primary" value="list" ><a  style="text-decoration: none;color: white;" href="index.php?act=listdm">Danh sách</a></button>
			</div>
			<?php
				if(isset($thongbao)&&$thongbao!=""){
					echo $thongbao;
				} 
			?>
		</form>
			
	</section>