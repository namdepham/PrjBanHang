<?php
    if(is_array($tk)){
        extract($tk);
    }
?>
<section class="content mt-5">
		<form action="index.php?act=updatetk" method="POST" role="form">
			<hr>
			<legend class="text-center">Form Update</legend>

			<div class="form-group">
				<label for="">Username:</label>
				<input type="text" class="form-control" name="user" value ="<?=$user?>">
			</div>
            <div class="form-group">
				<label for="">Password :</label>
				<input type="text" class="form-control" name="password" value ="<?=$password?>">
			</div>
            <div class="form-group">
				<label for="">Email :</label>
				<input type="text" class="form-control" name="email" value ="<?=$email?>">
			</div>
            <div class="form-group">
				<label for="">Telephone :</label>
				<input type="text" class="form-control" name="tel" value ="<?=$tel?>">
			</div>
            <div class="form-group">
				<label for="">Address :</label>
				<input type="text" class="form-control" name="address" value ="<?=$address?>">
			</div>
           
            <div class="form-group">
				<input type="hidden" class="form-control" name="id" value ="<?=$id?>">
			</div>


			<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="Cập nhật" name="update" />
			<button class="btn btn-primary" type ="reset">Nhập lại</button>
			<button class="btn btn-primary" value="list" ><a  style="text-decoration: none;color: white;" href="index.php?act=tk">Danh sách</a></button>
			</div>
			<?php
				if(isset($thongbao)&&$thongbao!=""){
					echo $thongbao;
				} 
			?>
		</form>
			
	</section>