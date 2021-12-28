<?php
    function insert_sanpham($name,$mota,$price,$filename,$iddm){
        $sql = "insert into sanpham (name,mota,price,iddm,img) values ('$name','$mota','$price','$iddm','$filename')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql ="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham($kyw,$iddm){ //load sản phẩm theo tra cứu của trang admin
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
		$listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_sanpham_danhmuc($iddm){ //load sản phẩm theo danh mục
        $sql = "select * from sanpham where iddm ='".$iddm."' ";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_sanpham_home(){ // load sản phẩm trang 2 , giới hạn từ sản phẩm 0 đến 9
        $sql = "select * from sanpham order by id desc limit 0,9";
		$listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_sanpham_home2(){ // load sản phẩm trang 2 , giới hạn từ sản phẩm 11 đến 18
        $sql = "select * from sanpham order by id desc limit 11,18";
		$listsp2 = pdo_query($sql);
        return $listsp2;
    }

    function loadone_sanpham($id){ //load 1 sản phẩm
        $sql = "select * from sanpham where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function loadall_sanpham_cungload($id,$iddm){
        $sql = "select * from sanpham where iddm = ".$iddm." AND id <> ".$id; //sản phẩm cùng loại phải có cùng danh mục và khác id
        $sp = pdo_query($sql);
        return $sp;
    }
    function update_sanpham($id,$name,$price,$filename,$mota,$iddm){
        if($filename!=""){
            $sql = "update sanpham set name = '".$name."', price = '".$price."', img = '".$filename."', mota = '".$mota."', iddm = '".$iddm."' where id=".$id;
            }
        else{ 
            $sql = "update sanpham set name = '".$name."', price = '".$price."', mota = '".$mota."',iddm = '".$iddm."' where id=".$id;
        }   
		pdo_execute($sql);
    }
?>