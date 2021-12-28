<?php
    //Kết nối đến database sử dụng PDO
    function pdo_get_connection(){
        $dburl ="mysql:host=localhost;dbname=duanmau2021;charset=utf8";
        $username = 'root';
        $password = '';
        $conn = new PDO($dburl, $username, $password);
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    //Thực thi câu lệnh sql thao tác dữ liệu INSERT, UPDATE, DELETE
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            
        } catch (PDOException $e) {
            throw $e;
        }finally{
            unset($conn);
        }
        
    }
    //Thực hiện câu lệnh truy vấn dữ liệu nhiều bản ghi
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        } catch (PDOException $e) {
            throw $e;
        }finally{
            unset($conn);
        }
    }    
    //Thực hiện câu lệnh truy vấn một bản ghi
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            throw $e;
        }finally{
            unset($conn);
        }
    }
    // Thực hiện câu lệnh try vấn một giá trị
    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        } catch (PDOException $e) {
            throw $e;
        }finally{
            unset($conn);
        }
    }  
?>