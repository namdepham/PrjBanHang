<?php
    if(is_array($bl)){
        extract($bl);
    }
?>
<section class="content mt-5">
		<form action="index.php?act=updatebl" method="POST" role="form">
			<hr>
			<legend class="text-center">Form Update</legend>

			<div class="form-group">
				<label for="">Nội dung:</label>
				<input type="text" class="form-control" name="noidung" value ="<?=$noidung?>">
			</div>
            <div class="form-group">
				<label for="">ID người dùng  :</label>
				<input type="text" class="form-control" name="iduser" value ="<?=$iduser?>">
			</div>
            <div class="form-group">
				<label for="">ID hàng hóa :</label>
				<input type="text" class="form-control" name="idpro" value ="<?=$idpro?>">
			</div>
            <div class="form-group">
				<label for="">Ngày bình luận :</label>
				<input type="text" class="form-control" name="ngaybinhluan" value ="<?=$ngaybinhluan?>">
			</div>
           
            <div class="form-group">
				<input type="hidden" class="form-control" name="id" value ="<?=$id?>">
			</div>


			<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="Cập nhật" name="update" />
			<button class="btn btn-primary" type ="reset">Nhập lại</button>
			<button class="btn btn-primary" value="list" ><a  style="text-decoration: none;color: white;" href="index.php?act=binhluan">Danh sách</a></button>
			</div>
			<?php
				if(isset($thongbao)&&$thongbao!=""){
					echo $thongbao;
				} 
			?>
		</form>
			
	</section>