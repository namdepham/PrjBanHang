<!-- Làm file bình luận riêng không qua index lấy dữ liệu từ jquery bên sản phẩm chi tiết -->

<?php
	session_start();
	include '../../model/pdo.php';
	include '../../model/binhluan.php';
	include "../../model/taikhoan.php";
	$iduser = $_SESSION['user']['id'];// lấy id người dùng khi người dùng đnăg nhập vào trang chủ
	$idpro = $_REQUEST['idpro']; //lấy idpro đc gửi từ bên sanphamchitiet.php
	$listbl = loadall_binhluan($idpro);
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="row">

<?php
	if (isset($iduser)) {

?>
<div class="col-md-12 mt-5">
				<h4> Comments</h4>
    				<div class="widget-area no-padding blank ">
						
								<?php
								foreach ($listbl as $binhluan) {
									extract($binhluan);
									echo '
									<table class="table text-center">
									<tbody>
										<tr>
											<td>'.$id.'</td>
											<td>'.$noidung.'</td>
											<td>'.$ngaybinhluan.'</td>
										</tr>
									</tbody>
									</table>
									';
								}
								?>
							
						</div>
</div>

<div class="col-md-12 mt-4">
        <h4>Write comment on this<h4>
			<div class="widget-area no-padding blank ">
				<div class="status-upload">
					<!-- Thực hiện trên cùng 1 trang -->
						<form method="post" action="<?=$_SERVER['PHP_SELF']?>"> 
							<textarea name="noidung" placeholder="Write comment on this..." ></textarea>
							<input type="hidden" name="idpro" value="<?=$idpro?>" />
							<input type="hidden" name="iduser" value="<?=$iduser?>" />
							<input type="submit" name="guibinhluan" value = "Share" class="btn btn-default"/>
						</form>
					</div>
				</div>
            </div>
			<?php
				if (isset($_POST['guibinhluan'])&&$_POST['guibinhluan']) {
					$noidung = $_POST['noidung'];
					$idsp = $_POST['idpro'];
					$iduser = $_POST['iduser'];
					$ngaybinhluan= date('h:i:sa d/m/Y');
					insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
					header("Location: ".$_SERVER['HTTP_REFERER']); //Chuyển lại trang ban đầu, ko cho chuyển trang tiếp
				}
			?>
<?php
	}else {		
?>
<div class="col-md-12 mt-5">
				<h4> Comments</h4>
    				<div class="widget-area no-padding blank ">
						
								<?php
								foreach ($listbl as $binhluan) {
									extract($binhluan);
									echo '
									<table class="table">
										<tr>
											<td>'.$iduser.'</td>
											<td>'.$noidung.'</td>
											<td>'.$ngaybinhluan.'</td>
										</tr>
									
									</table>
									';
								}
								?>
							
						</div>
</div>

<div  class="col-md-12 mt-5">
	<h4>Đăng nhập để bình luận</h4>
</div>


<?php
	}
?>
</div>
</body>
</html>


<style>
body{ background: #fafafa;}
.widget-area.blank {
background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
-webkit-box-shadow: none;
-moz-box-shadow: none;
-ms-box-shadow: none;
-o-box-shadow: none;
box-shadow: none;
}
body .no-padding {
padding: 0;
}
.widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload ul {
float: left;
list-style: none outside none;
margin: 0;
padding: 0 0 0 15px;
width: auto;
}
.status-upload ul > li {
float: left;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}

</style>