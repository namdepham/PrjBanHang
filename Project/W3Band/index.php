
<?php
    session_start();
    include "model/sanpham.php";//khi không có action thì vẫn phải load sản phẩm lên trang chủ
    include "model/danhmuc.php";//khi không có action thì vẫn phải load danh mục lên trang chủ
    include "model/taikhoan.php";
    include "model/bill.php";
    include "model/pdo.php";//khi không có action thì vẫn phải load danh mục lên trang chủ
    $listdm = loadall_danhmuc();
    include "view/header.php";
    include "global.php";//khai báo biến dùng chung cho trang chủ, ví dụ như để load nguồn chứa ảnh lên so khớp với thư mục upload
    $listsp = loadall_sanpham_home();//khi không có action thì vẫn phải load sản phẩm lên trang chủ
   
    
    
    if (isset($_GET['act'])&& $_GET['act'] !='') {
        $act = $_GET['act'];
        switch ($act) {
            case 'aboutus':
                include "view/aboutus.php";
                break;
            case 'contact':
                include "view/contact.php";
                break;

            case 'sanpham':
                if(isset($_GET['iddm'])){
                    $iddm = $_GET['iddm'];
                    $listsp =  loadall_sanpham_danhmuc($iddm);
                } 
                include "view/sanphamdanhmuc.php";
                break;
            case 'sanphamchitiet':
                if (isset($_GET['idsp'])) {
                    $id = $_GET['idsp'];
                    $spdetails =loadone_sanpham($id);
                    extract($spdetails); // extract bởi vì muốn lấy iddm của list spdetails ra để truyền và hàm
                    $spcl =  loadall_sanpham_cungload($id,$iddm);
                    
                }
                include "view/sanphamchitiet.php";
                break;
            case 'dangky':
                if (isset($_POST['register'])&&($_POST['register'])){
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    insert_taikhoan($user,$password,$email,$address,$tel);
                    $thongbao ="Đăng ký thành công. Vui lòng đăng nhập để bình luận!";
                    
                } 
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap': //đoạn code khó nhất, cần làm việc với session
                if (isset($_POST['signin'])&&($_POST['signin'])){
                    $user = $_POST['user'];
                    $password = $_POST['pwd'];
                    $checkuser = checkuser($user,$password);
                    if (is_array($checkuser)) {
                        $_SESSION['user']=$checkuser;   //*** ko được đảo lộn thứ tự session trc r đến biến 
                        //So sánh với account đăng kí với account đnăg nhập để show ra view  
                        include "view/contact.php"; 
                    }
                    else{
                        $thongbao="Tài khoản không tồn tại hãy đăng ký!";   
                        include "view/taikhoan/dangky.php" ;             
                    }
                    
                } 
                break;
            case 'capnhat':
                if (isset($_POST['update'])&&($_POST['update'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    $thongbao ="Cập nhật thành công!";
                    update_taikhoan($id,$user,$password,$email,$address,$tel);
                   
                }
                include "view/taikhoan/capnhat.php";
                break;
            case 'quenmatkhau': 
                if(isset($_POST['sendemail'])&& $_POST['sendemail']){
                    $email = $_POST['email'];
                    $checkemail= checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là: ".$checkemail['password'];
                    }
                    else{
                        $thongbao ="Email không hợp lệ!";
                    }
                }
                include "view/taikhoan/quenmatkhau.php";
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
            case 'addtocart':
                if (isset($_POST['buy'])&&$_POST['buy']) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $img = $_POST['img'];
                    $soluong =1;
                    $thanhtien = $soluong * $price;
                    $spadd = [$id,$name,$price,$img,$soluong,$thanhtien]; 
                    if (!isset($_SESSION['mycart'])) {
                        $_SESSION['mycart'] =[];
                    }
                    array_push($_SESSION['mycart'], $spadd);  
                
                }
                include "view/cart/viewcart.php";
                break;
            case 'viewcart':
                    include "view/cart/viewcart.php";
                    break;
            case 'delcart':
                if (isset($_GET['idcart'])) {
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }
                else {
                    $_SESSION['mycart'] = []; // nếu không tìm được id cart thì sẽ cho mảng cart là rỗng để tái thực hiện lại quá trình tạo lại mycart
                }
                header("Location: index.php?act=viewcart");// sau khi xóa xong phải load lại trang về trang về
                break;
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'billconfirm':
                if (isset($_POST['payment'])&&$_POST['payment']) {
                    $bill_address = $_POST['bill_address'];
                    $bill_name = $_POST['bill_name'];
                    $bill_price = $_POST['bill_price'];
                    $bill_tel = $_POST['bill_tel'];
                    $bill_email =$_POST['bill_email'];
                    $soluong = $_POST['soluong'];
                    $pttt = $_POST['pttt'];
                    insert_bill($bill_address,$bill_name,$bill_price,$bill_tel,$bill_email,$soluong,$pttt);
                
                }
                
                include "view/cart/billconfirm.php";
                break;
            case 'trang2':
                $listsp2 = loadall_sanpham_home2();
                include "view/home2.php";
                break;
            
            default:
                include "view/home.php";
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>