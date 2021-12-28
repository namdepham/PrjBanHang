<?php
    function insert_danhmuc($name){
        $sql = "insert into danhmuc (name) values ('$name')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql ="delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "select * from danhmuc";
		$listdm = pdo_query($sql);
        return $listdm;
    }
    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$name){
        $sql = "update danhmuc set name = '".$name."' where id=".$id;
		pdo_execute($sql);
    }
?>