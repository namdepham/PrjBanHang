<?php
    if (is_array($spdetails)) {
        extract($spdetails);
        $hinh = $img_path.$img;
    }
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body{
    background-color: #edf1f5;
    margin-top:20px;
}
.card {
    margin-bottom: 30px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #8898aa;
}
.table-product.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f3f8fa!important
}
.table-product td{
    border-top: 0px solid #dee2e6 !important;
    color: #728299!important;
}
</style>

<div class="container">
    <div class="card">
        <div class="card-body">
            
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 mt-5">
                    <div class="white-box text-center"><img width="75%" src="<?=$hinh?>" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h3 class="box-title mt-5"><?=$name?></h3>
                    <p><?=$mota?></p>
                    <h2 class="mt-5">
                        $<?=$price?>
                    </h2>
                    
                    <h3 class="box-title mt-5">Key Highlights</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i> Good materials</li>
                        <li><i class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                        <li><i class="fa fa-check text-success"></i> Friendly-environmental </li>
                    </ul>
                </div>
            
            </div>
           
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script>
                
                $(document).ready(function(){
                    $('#binhluan').load('view/binhluan/binhluanform.php',{idpro: <?=$id?>});
                });
            </script>
           
            <div class="row " >
                <div class ="col-md-6 " id="binhluan"> 

                
                
                
                
                </div>
    
               
                <div class ="col-md-6 mt-5"> 
                   <h4>Generic Products</h4>
                   <?php
                        foreach ($spcl as $sanphamcungloai) {
                            extract ($sanphamcungloai);
                            //đoạn này để quay lại trnag sản phẩm chi tiết và load lại sản phẩm đã yêu cầu
                            $sanphamchitiet = 'index.php?act=sanphamchitiet&idsp='.$id;
                            echo'<ul class="list-unstyled">
                                <a style="color:black" href="'.$sanphamchitiet.'"><li>'.$name.'</li></a>
                            </ul>';
                        }
                        
                   ?>
                   
                   
                </div>
               
                            
			</div>
            
        
        </div>
        </div>
            
        </div>
    </div>
</div>

