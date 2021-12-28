<?php
    if(is_array($thongke)){
        extract($thongke);
    }
?>
<section class="content mt-5">
		<form action="index.php?act=updatebill" method="POST" role="form">
			<hr>
			<legend class="text-center">Form Update</legend>

			<div class="form-group">
				<label for="">Customer Name</label>
				<input type="text" class="form-control" name="bill_name" value ="<?=$bill_name?>">
			</div>
            <div class="form-group">
				<label for="">Address:</label>
				<input type="text" class="form-control" name="bill_address" value ="<?=$bill_address?>">
			</div>
            <div class="form-group">
				<label for="">Total price :</label>
				<input type="text" class="form-control" name="bill_price" value ="<?=$bill_price?>">
			</div>
            <div class="form-group">
				<label for="">Phone number:</label>
				<input type="text" class="form-control" name="bill_tel" value ="<?=$bill_tel?>">
			</div>
            <div class="form-group">
				<label for="">Email:</label>
				<input type="text" class="form-control" name="bill_email" value ="<?=$bill_email?>">
			</div>
            <div class="form-group">
				<label for="">Number of items</label>
				<input type="text" class="form-control" name="soluong" value ="<?=$soluong?>">
			</div>
            <div class="form-group">
				<label for="">Payment Method:</label>
				<input type="text" class="form-control" name="pttt" value ="<?=$pttt?>">
			</div>
           
            <div class="form-group">
				<input type="hidden" class="form-control" name="id" value ="<?=$id?>">
			</div>


			<div class="form-group text-center">
			<input type="submit" class="btn btn-primary" value="Cập nhật" name="update" />
			<button class="btn btn-primary" type ="reset">Nhập lại</button>
			<button class="btn btn-primary" value="list" ><a  style="text-decoration: none;color: white;" href="index.php?act=thongke">Danh sách</a></button>
			</div>
			<?php
				if(isset($thongbao)&&$thongbao!=""){
					echo $thongbao;
				} 
			?>
		</form>
			
	</section>