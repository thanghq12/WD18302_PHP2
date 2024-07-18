<?php
include_once "db.php";
function getProduct()
{
    $sql = "SELECT * FROM product";
    return getData($sql); // nếu như câu lệnh là thêm, sửa, xóa, thì phải truyền thêm false
}

function addProduct($name,$price)
{
    $sql = "INSERT INTO product (name,price) VALUES ('$name','$price')";
    return getData($sql,false);
}
//tự xây dựng câu lệnh sửa,xóa

