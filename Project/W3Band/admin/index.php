<?php 
		include "../model/danhmuc.php";
		include "../model/sanpham.php";
		include "../model/pdo.php";
		include "../model/binhluan.php";
		include "../model/bill.php";
		include "../admin/header.php";
		include "../model/taikhoan.php";
		
		if (isset($_GET['act'])&& $_GET['act']) {
			$act = $_GET['act'];
			switch ($act) {
//Danh mục/////////////////////////////////////////////////////
				case 'adddm':
					if(isset($_POST['add'])&&($_POST['add'])){
						$name = $_POST['name'];
						insert_danhmuc($name);
						$thongbao = 'Thêm thành công';
					}
					include "Danhmuc/add.php";
					break;		
				case 'listdm':
					$listdm= loadall_danhmuc();
					include "Danhmuc/list.php";
					break;
				case 'xoadm':
					if(isset($_GET['id'])&&($_GET['id'])>0){
						delete_danhmuc( $_GET['id']);
					}
					$listdm= loadall_danhmuc();
					include "Danhmuc/list.php";
					break;
				case 'suadm':
					if(isset($_GET['id'])&&($_GET['id'])>0){
					$dm=loadone_danhmuc($_GET['id']);
					}
					include "Danhmuc/update.php";
					break;
				case 'updatedm':
					if(isset($_POST['update'])&&($_POST['update'])){
						$name = $_POST['name'];
						$id = $_POST['id'];
						update_danhmuc($id,$name);
						$thongbao = 'Cập nhật thành công';
						
					}
					$listdm =loadall_danhmuc();
					include "Danhmuc/list.php";	
					break;
// Sảm phẩm////////////////////////////////////////////////
				case 'addsp':	
					if(isset($_POST['add'])&&($_POST['add'])){
						$mota = $_POST['mota'];
						$name = $_POST['name'];
						$price = $_POST['price'];
						$iddm = $_POST['iddm'];
						$filename = $_FILES['image']['name'];
						$target_dir = "../upload/";
						$target_file = $target_dir . basename($_FILES["image"]["name"]);
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
						  } else {
							//echo "Sorry, there was an error uploading your file.";
						  }
						
						insert_sanpham($name,$mota,$price,$filename,$iddm);
						$thongbao = 'Thêm thành công';
					}
					$listdm= loadall_danhmuc();	
					include "Sanpham/add.php";
					break;
				case 'listsp':
					if(isset($_POST['search'])&&($_POST['search'])){
						$kyw= $_POST['kyw'];
						$iddm = $_POST['iddm'];
					}
					else{
						$kyw  ='';
						$iddm = 0;
					}			
					$listdm = loadall_danhmuc();	
					$listsp= loadall_sanpham($kyw,$iddm);				
					include "Sanpham/list.php";
					break;
				case 'xoasp':
					if(isset($_GET['id'])&&($_GET['id'])>0){
						delete_sanpham( $_GET['id']);
					}
					$listsp= loadall_sanpham('',0);
					$listdm = loadall_danhmuc();
					include "Sanpham/list.php";
					break;
				case 'suasp':
					if(isset($_GET['id'])&&($_GET['id'])>0){
					$sp=loadone_sanpham($_GET['id']);
					}
					$listdm = loadall_danhmuc();
					include "Sanpham/update.php";
					break;
				case 'updatesp':
					if(isset($_POST['update'])&&($_POST['update'])){
						$id = $_POST['id'];
						$mota = $_POST['mota'];
						$name = $_POST['name'];
						$price = $_POST['price'];
						$iddm = $_POST['iddm'];
						$filename = $_FILES['image']['name'];
						$target_dir = "../upload/";
						$target_file = $target_dir . basename($_FILES["image"]["name"]);
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
						}else {
							//echo "Sorry, there was an error uploading your file.";
						}
						update_sanpham($id,$name,$price,$filename,$mota,$iddm);
						$thongbao = 'Cập nhật thành công';
						
					}
					$listdm = loadall_danhmuc();
					$listsp =loadall_sanpham('',0);
					include "Sanpham/list.php";	
					break;
// TÀI KHOẢN/////////////////////////////
					case 'tk':
						$listtk =  loadall_taikhoan();
						include "Taikhoan/list.php";
						break;
					case 'xoatk':
						if (isset($_GET['id'])&&$_GET['id']>0) {
							$id = $_GET['id'];
							delete_taikhoan($id);
						}
						$listtk =  loadall_taikhoan();
						include "Taikhoan/list.php";
						break;
					case 'suatk':
						if (isset($_GET['id'])&&$_GET['id']>0) {
							$tk =  loadone_taikhoan($_GET['id']);
						}
						include "Taikhoan/update.php";
						break;
					case 'updatetk':
						if (isset($_POST['update'])&&$_POST['update']) {
							$user = $_POST['user'];
							$email = $_POST['email'];
							$address = $_POST['address'];
							$password = $_POST['password'];
							$id = $_POST['id'];
							$tel = $_POST['tel'];
							update_taikhoan($id,$user,$address,$email,$tel,$password);
						}
						$listtk =  loadall_taikhoan();
						include "Taikhoan/list.php";
						break;
					case 'binhluan':
						$listbl = loadtatca_binhluan();
						include "Binhluan/list.php";
						break;
					case 'xoabl':
						if (isset($_GET['id'])&& $_GET['id']>0) {
							$id = $_GET['id'];
							delete_binhluan($id);
						}
						$listbl = loadtatca_binhluan();
						include "Binhluan/list.php";
						break;
					case 'suabl':
						if (isset($_GET['id'])&& $_GET['id']>0) {
							$id = $_GET['id'];
							$bl =  loadone_binhluan($id);
						}
						include "Binhluan/update.php";
						break;
					case 'updatebl':
						if (isset($_POST['update'])&&$_POST['update']) {
							$noidung = $_POST['noidung'];
							$iduser = $_POST['iduser'];
							$idpro = $_POST['idpro'];
							$ngaybinhluan = $_POST['ngaybinhluan'];
							$id = $_POST['id'];
							
							update_binhluan($noidung,$iduser,$idpro,$ngaybinhluan,$id);
						}
						$listbl = loadtatca_binhluan();
						include "Binhluan/list.php";
						break;
					case 'thongke':
						$listthongke = loadall_bill();
						include "Bill/list.php";
						break;
					case 'xoabill':
						if (isset($_GET['id'])&& $_GET['id']>0) {
							$id = $_GET['id'];
							delete_bill($id);
						}
						$listthongke = loadall_bill();
						include "Bill/list.php";
						break;
					case 'suabill':
						if (isset($_GET['id'])&& $_GET['id']>0) {
							$id = $_GET['id'];
							$thongke =  loadone_bill($id);
						}
						include "Bill/update.php";
						break;
					case 'updatebill':
						if (isset($_POST['update'])&&$_POST['update']) {
							$bill_address = $_POST['bill_address'];
							$bill_name = $_POST['bill_name'];
							$bill_price = $_POST['bill_price'];
							$bill_tel = $_POST['bill_tel'];
							$bill_email = $_POST['bill_email'];
							$soluong = $_POST['soluong'];
							$pttt = $_POST['pttt'];
							$id = $_POST['id'];
							update_binhluan($id,$bill_address,$bill_name,$bill_price,$bill_tel,$bill_email,$soluong,$pttt);
						}
						$listthongke = loadall_bill();
						include "Bill/list.php";
						break;
						

			}
	
					

		}
		else{
			include "home.php";
		}
		
		include "footer.php";

 ?>