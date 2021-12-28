<?php
	if(is_array($sp)){
		extract($sp);
		$hinhpath = "../upload/".$img;
                            if((is_file($hinhpath))){
                                $hinh = "<img width='100px' src='".$hinhpath."' />";
                            }else{
                                $hinh = 'không có hình';
                            }
	}
	
?>
<section class="content mt-5">
		<form action="index.php?act=updatesp" method="POST" role="form" enctype="multipart/form-data">
			<hr>
			<legend class="text-center">Form Update</legend>

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
								if($iddm == $id){
									echo '<option selected value = "'.$id.'">'.$name.'</option>';
								}
								else{
									echo '<option value = "'.$id.'">'.$name.'</option>';
								}
							}
							
						
					?>
					
				</select>
			</div>
			<?php
			if(is_array($sp)){
				extract($sp);

			}
			
			?>
			<div class="form-group">
				<label for="">Tên sản phẩm :</label>
				<input type="text" class="form-control" name="name" value="<?=$name?>">
			</div>
			<div class="form-group">
				<label for="">Giá :</label>
				<input type="text" class="form-control" name="price" value="<?=$price?>">
			</div>
			<div class="form-group">
				<label for="">Hình ảnh :</label>
				<input type="file" class="form-control" name="image">
				<?=$hinh?>
			</div>
			<div class="form-group">
				<label for="">Mô tả :</label><br/>
				<textarea  cols="1000" name="mota"><?=$mota?></textarea>
			</div>
			
			<div class="form-group text-center">
			<input type="hidden" name="id" value="<?=$id?>" />
			<input type="submit" class="btn btn-primary" value="Cập nhật" name="update" />
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