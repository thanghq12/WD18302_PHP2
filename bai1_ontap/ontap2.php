<?php

/** Funtion */

// Hàm không trả về

$a = 5;
function ktChanLe($a)
{
    if ($a % 2 == 0) {
        echo "Số chẵn";
    } else {
        echo "Số lẻ";
    }
}

// Tính diện tích HCN
function dienTichHCN($chieuDai, $chieuRong)
{
    $HCN = $chieuDai * $chieuRong;
    return $HCN;
}

// Hàm trả về
// là hàm trả về một giá trị cụ thể (có thể là số, chữ, boolean,...)

// Trường hợp 1: Tạo ra 1 biến hứng giá trị trả về
// $dt = dienTichHCN($chieuDai, $chieuRong);
// Trường hợp 2: Sử dụng trực tiếp
// echo "Diện tích là " . $dt;

// Tính tổng 3 số có trả về
function tinhTong($a, $b, $c)
{
    return $a + $b + $c;
}
echo "Tổng 3 số là: " . tinhTong(2, 3, 4);
