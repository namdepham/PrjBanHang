<?php
 function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "select * from binhluan where idpro = '".$idpro."' order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function loadtatca_binhluan(){
    $sql = "select * from binhluan  order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id){
    $sql ="delete from binhluan where id=".$id;
    pdo_execute($sql);
}
function update_binhluan($noidung,$iduser,$idpro,$ngaybinhluan,$id){
    $sql = "update binhluan set noidung = '".$noidung."', iduser = '".$iduser."', idpro = '".$idpro."', ngaybinhluan = '".$ngaybinhluan."' where id=".$id;            
    pdo_execute($sql);
}
function loadone_binhluan($id){ //load 1 bình luận
    $sql = "select * from binhluan where id=".$id;
    $bl = pdo_query_one($sql);
    return $bl;
}

?>