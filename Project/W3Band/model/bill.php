<?php
function insert_bill($bill_address,$bill_name,$bill_price,$bill_tel,$bill_email,$soluong,$pttt){
    $sql = "insert into bill(bill_address,bill_name,bill_price,bill_tel,bill_email,soluong,pttt) values ('$bill_address','$bill_name','$bill_price','$bill_tel', '$bill_email', '$soluong', '$pttt')";
    pdo_execute($sql);
}
function loadall_bill(){
    $sql = "select * from bill  order by id desc";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
function delete_bill($id){
    $sql ="delete from bill where id=".$id;
    pdo_execute($sql);
}
function loadone_bill($id){ //
    $sql = "select * from bill where id=".$id;
    $thongke = pdo_query_one($sql);
    return $thongke;
}
function update_bill($id,$bill_address,$bill_name,$bill_price,$bill_tel,$bill_email,$soluong,$pttt){
    $sql = "update bill set bill_address = '".$bill_address."', bill_name = '".$bill_name."', bill_price = '".$bill_price."', bill_tel = '".$bill_tel."', bill_email = '".$bill_email."', soluong = '".$soluong."', pttt = '".$pttt."' where id=".$id;            
    pdo_execute($sql);
}
?>