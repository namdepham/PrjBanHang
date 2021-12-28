<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>	
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>List danh mục</title>
</head>
<body class="container mt-5">
<hr width="100%">
<div>
<h2 class="text-center">List danh mục</h2>
    <div class="row">
        <div class="col-md-12">
            <table border="1" class="table">
            	<caption>LIST DANH MỤC</caption>
                <tr  class="text-center">
                    <td>ID</td>
                    <td>TÊN DANH MỤC</td>
                    <td>CHỈNH SỬA</td>
                    
                </tr>
                
                    <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            $xoadm = "index.php?act=xoadm&id=".$id;
                            $suadm = "index.php?act=suadm&id=".$id;
                            echo 
                            '<tr class="text-center">
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td class="text-center">
                                    <button class="bg-default btn"><a style="text-decoration: none;color: black;" href ="'.$xoadm.'">Delete</a></button>
                                    <button class="bg-default btn"><a style="text-decoration: none;color: black;" href ="'.$suadm.'">Edit</a></button>
                                </td>                                         
                            </tr>';
                        }
                    ?>
 
                
            </table>
            <h6><a href="home.php">Quay lại Trang Chủ</a></h6><br/>
        </div>    
    </div>
</div>
</body>
</html>