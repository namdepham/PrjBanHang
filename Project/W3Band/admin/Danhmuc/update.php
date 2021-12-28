<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<section class="content mt-5">
		<form action="index.php?act=updatedm" method="POST" role="form">
			<hr>
			<legend class="text-center">Form Update</legend>

			<div class="form-group">
				<label for="">ID : </label>
				<input disabled type="text" class="form-control" name="id">
			</div>
			<div class="form-group">
				<label for="">Tên danh mục :</label>
				<input type="text" class="form-control" name="name" value ="<?=$name?>">
			</div>
            <div class="form-group">
				<input type="hidden" class="form-control" name="id" value ="<?=$id?>">
			</div>


			<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="Cập nhật" name="update" />
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