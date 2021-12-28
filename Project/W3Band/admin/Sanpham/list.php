<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>	
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>List SẢN PHẨM</title>
</head>
<body class="mt-5">
    <hr>
    <h2 class="text-center">LIST SẢN PHẨM</h2>  
    <div class="container">
    <hr>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=listsp"  method="post">
                <label>Nhập tên cần tìm: 
                    <input type = "text" name="kyw"/>
                </label>    
                <br>   
                <label>Chọn danh mục cần tìm:
                <select name ="iddm">
                    <option value="0" selected>Tất cả</option>
					<?php
                            if(isset($listdm)){
                                foreach ($listdm as $dm) {
                                    extract($dm);
                                    echo '<option  value = "'.$id.'">'.$name.'</option>';
                                }
                            }		
							
			
					?>
					
				</select> 
                </label>
                <br>
                <input type="submit" class="btn btn-default" name="search" value="Tìm kiếm"/>
                
            </form>
           
            <table  class="table ">
            	
                <tr  class="text-center">
                    <th>ID</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>Mô tả</th>
                    <th>CHỈNH SỬA</th>
                    
                </tr>
               
                <?php
                        foreach ($listsp as $sanpham) {
                            extract($sanpham);
                            
                            $xoasp = "index.php?act=xoasp&id=".$id;
                            $suasp = "index.php?act=suasp&id=".$id;
                            $hinhpath = "../upload/".$img;
                            if((is_file($hinhpath))){
                                $hinh = "<img width='100px' src='".$hinhpath."' />";
                            }else{
                                $hinh = 'không có hình';
                            }
                            echo 
                            '<tr class="text-center">
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$mota.'</td>
                                <td class="text-center">
                                    <button class="bg-default btn"><a style="text-decoration: none;color: black;" href ="'.$xoasp.'">Delete</a></button>
                                    <button class="bg-default btn"><a style="text-decoration: none;color: black;" href ="'.$suasp.'">Edit</a></button>
                                </td>                                         
                            </tr>';
                        }
                    ?>
                
            </table>
            <h6><a href="home.php">Quay lại trang chủ</a></h6>
        </div>    
    </div>
</div>
</body>
</html>