<?php
include_once "models/Product.php";
function index()
{
    $products = getProduct();
//    var_dump($product);
    include_once "views/product/index.php";
}

function addProduct()
{
    echo "Đây là trang thêm sản phẩm!";
}
function editProduct()
{
    echo "Đây là trang thêm sản phẩm!";
}
