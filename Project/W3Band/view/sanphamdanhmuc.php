<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<section class="modal-content">
		<div class="items">
			<div class="container">
			<div class="row">	
				<?php
					foreach ($listsp as $sp) {
						extract($sp);
						$hinh = $img_path.$img;
						echo '		
							<div class="col-xs-12 col-sm-6 col-md-4 mt-4 mb-5" >
							<div class="pic1"><a href="index.php?act=sanphamchitiet&idsp='.$id.'"><img width="100%" src="'.$hinh.'"></a></div>
					  		<div class="text-center detailitems"><a style="color:black" href="index.php?act=sanphamchitiet&idsp='.$id.'">'.$name.'</a></div>
							<div class="text-center detailitems">$'.$price.'</div>
							<form action="index.php?act=addtocart" method="post" >
								<input type="hidden" name="id" value="'.$id.'">
								<input type="hidden" name="name" value = "'.$name.'">
								<input type="hidden" name="price" value="'.$price.'">
								<input type="hidden" name="img" value="'.$img.'">
								<div class="text-center mt-2"><input type="submit" class="btn btn-primary" name="buy" value="Add to cart"></div>
							</form>
					 		</div>
							 
						';
					}
				?>		 
           
			</div>
			</div>
			</div>           
		</div>

		
	</section>
