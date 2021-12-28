<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>	
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>LIST TÀI KHOẢN</title>
</head>
<body class="mt-5">
    <hr>
    <h2 class="text-center">LIST TÀI KHOẢN</h2>  
    <div class="container">
    <hr>
    <div class="row">
        <div class="col-md-12">
           
            <table  class="table ">
            	
                <tr  class="text-center">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Chỉnh sửa<th>
                    
                </tr>
               
                <?php
                        foreach ($listtk as $dstk) {
                            extract($dstk);
                            
                            $xoasp = "index.php?act=xoatk&id=".$id;
                            $suasp = "index.php?act=suatk&id=".$id;
                                     
                            echo 
                            '<tr class="text-center">
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$password.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
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