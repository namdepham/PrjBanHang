<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body{
    background: -webkit-linear-gradient(left, hotpink, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #00c6ff ;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<?php
// Kiểm tra xem có session toàn cục user vừa khai báo ở controller hay không, nếu có thì extract những thông tin từ biến seesssion user đã lưu ở controller
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    
?>

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="#">
                <h3>Hello, <?=$user?></h3>
               <div class="row">
                    <div class="col-md-12">         
                        <div class="form-group text-center">
                            <div class="mt-2"><a href="index.php?act=capnhat">Cập nhật tài khoản</a></div>
                            <div class="mt-2"><a href="index.php?act=quenmatkhau">Quên mật khẩu</a></div>
                            <?php if ($role == 1){ ///Kiểm tra xem role có bằng 1 k nếu bằng 1 thì là admin -> cho đăng nhập
                            //Lấy tên mục dtb làm biến truy xuất từ biến toàn cục session user
                            echo '<div class="mt-2"><a href="admin/index.php">Đăng nhập Admin</a></div>';
                            }
                            ?>
                            <div class="mt-2"><a href="index.php?act=thoat">Thoát</a></div>

                        </div>
                    </div>
                
            </form>
</div>

    

<?php
    }else{
?>
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="index.php?act=dangnhap">
                <h3>Log In Account</h3>
                
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>Username:</label>
                            <input  type="text" name="user" class="form-control" placeholder="Your Name *"  />
                        </div>
                        <div class="form-group ">
                            <label>Password:</label>
                            <input type="text" name="pwd" class="form-control " placeholder="Your Password *"  />
                        </div>
                        <div class="form-inline mb-2 ">           
                            <input type="checkbox" name="" class="form-inline" />&nbsp;
                            <label>Remember me?</label>
                        </div>
                        
                        <div class="form-group text-center">
                            <input type="submit" name="signin" class="btnContact" value="Log In" required/><br>
                            <div class="mt-2"><a href="index.php?act=dangky">You don't have an account? Register now</a></div>
                        </div>
                    </div>
                
            </form>
</div>
<?php }?>