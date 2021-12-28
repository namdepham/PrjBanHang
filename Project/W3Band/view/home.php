<section class="modal-content">
		<div class="carous">
			<div class="container">
				 <div class="row carousel">
			          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			             <ol class="carousel-indicators">
			                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			                <li data-target="#carousel-example-generic" data-slide-to="0"></li>
			                <li data-target="#carousel-example-generic" data-slide-to="0"></li>
			             </ol>
			             <div class="carousel-inner" role="listbox">
			                <div class="carousel-item active " >
			                   <img class="anh" width="100%" src="view/image/brand1.gif" alt="First slide">
			                </div>
			                <div class="carousel-item disabled " >
			                   <img class="anh" width="100%" src="view/image/brand1.gif" alt="second slide">
			                </div>
			                <div class="carousel-item disabled " >
			                   <img class="anh" width="100%" src="view/image/brand1.gif" alt="third slide">
			                </div>
			                
			                
			             </div>
			             <a class="left carousel-control left  " href="#carousel-example-generic " role="button" data-slide="prev">
			                <span><i class="fa fa-angle-left " aria-hidden="true"></i></span>
			                <span class="sr-only">Previous</span>
			             </a>
			             <a class="right carousel-control right" href="#carousel-example-generic" role="button" data-slide="next">
			                <span><i class="fa fa-angle-right " aria-hidden="true"></i></span>
			                <span class="sr-only">Next</span>
			             </a>
			          </div> 
			         </div>
				</div>
		</div>
		
		<div class="thumbnail">
			<div class="container">
				<div class="row padding-content">
               		<div class="col-md-6 col-xs-12 col-sm-6 ">
                  		<img src="view/image/thumbnail1.png" alt="anh1" class="thumbnail" width="100%" height="100%">
               			</div>
	               <div class="col-md-6 col-xs-12 col-sm-6 ">
	                  <img src="view/image/thumbnail2.png" alt="" class="thumbnail" width="100%" height="100%">
	               	</div>
         		</div>
				
			</div>	
		</div>
		<div class="items">
			<div class="container">
			<div class="row">	
				<?php
					foreach ($listsp as $sp) {
						extract($sp);
						$hinh = $img_path.$img;
						echo '
							<div class="col-xs-12 col-sm-6 col-md-4 mt-4 mr" >
							<div class="pic1"><img width="100%" src="'.$hinh.'"></div>
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

		<div class="page">
			<div class="container">
				   <div class="row padding-content">
			            <div class="col-md-12 ">
			               <nav>
			                 <ul class="pagination justify-content-center ">	 
			                   <li class="page-item disabled"><a class="page-link" href="index.php">1</a></li>
			                   <li class="page-item"><a class="page-link" href="index.php?act=trang2">2</a></li>
			                   
			                 </ul>
			               </nav>            
			        	</div>       
			        </div>
			</div>
		</div>
	</section>
