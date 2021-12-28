<?php
    function insert_taikhoan($user,$password,$email,$address,$tel){
        $sql = "insert into taikhoan(user,password,email,address,tel) values ('$user','$password','$email','$address','$tel')";
        pdo_execute($sql);
    }
    function checkuser($user,$password){ //Load lên tài khoản người dùng so khớp có đúng với dtb không
        $sql = "select * from taikhoan where user='".$user."' AND password ='".$password."' ";
        $checkuser = pdo_query_one($sql);
        return $checkuser;
    }
    function checkemail($email){ //Load lên mật khẩu của người dùng nếu email có trong database trước đó(QUên mật khẩu)
        $sql = "select * from taikhoan where email='".$email."' ";
        $checkemail = pdo_query_one($sql);
        return $checkemail;
    }
    function update_taikhoan($id,$user,$password,$email,$address,$tel){
        $sql = "update taikhoan set user = '".$user."', password = '".$password."', email = '".$email."', address = '".$address."', tel = '".$tel."' where id=".$id;            
		pdo_execute($sql);
    }
    function loadall_taikhoan(){ // load all tài khoản
        $sql = "select * from taikhoan order by id desc ";
		$listtk = pdo_query($sql);
        return $listtk;
    }
    function delete_taikhoan($id){
        $sql ="delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id){ //load 1 tài khoản
        $sql = "select * from taikhoan where id=".$id;
        $tk = pdo_query_one($sql);
        return $tk;
    }
?>