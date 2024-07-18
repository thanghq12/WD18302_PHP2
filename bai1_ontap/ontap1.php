<?php
// Ôn tập về biến trong PHP
$a = 5; // Kiểu ký tự số nguyên
$b = 5.5; // Kiểu ký tự số thực
$c = "Fpoly"; // Kiểu dữ liệu chuỗi
$d = true; // Kiểu dữ liệu boolean

echo "Xin chào " . $c . '<br>';
// Mảng tuần tự
// Mảng là gì
$a = [2, 3, 5, 16, 20];
// echo $a[3] . '<br>';
// echo $a[1] . '<br>';
// // Duyệt mảng
// for ($i = 0; $i < count($a); $i++) {
//     echo $a[$i] . "<br>";
// }

// Hiển thị những phần tử trong mảng $a là số chẵn
for ($i = 0; $i < count($a); $i++) {
    if ($a[$i] % 2 == 0) {
        echo $a[$i] . "<br>";
    }
}

// Tính tổng các phẩn tử trong mảng $a
// $sum = 0;
// for ($i = 0; $i < count($a); $i++) {
//     $sum += $a[$i];
// }
// echo $sum;

// Dùng foreach hiển thị ra những vị trí chứa phần tử là số chẵn
foreach ($a as $key => $value) {
    if ($value % 2 == 0) {
        echo $key . "<br>";
    }
}
// Mảng liên hợp: là mảng tự điểu chỉnh được key
$manglh = ["A" => 1, "B" => 2, "C" => 3, "D" => 4, "E" => 5];
echo $manglh["E"];
// Sử dụng foreach để hiển thị ra vị trí số phần tử là số lẻ

$mangColor = ["red" => "Màu đỏ", "blue" => "Màu xanh", "pink" => "Màu hồng"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Key</td>
            <td>Value</td>
        </tr>
        <?php
        foreach ($manglh as $key => $value) {
        ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <table border="1">
        <tr>
            <td>Tiếng Anh</td>
            <td>Tiếng Việt</td>
        </tr>
        <?php
        foreach ($mangColor as $tiengAnh => $tiengViet) {
        ?>
            <tr>
                <td style="background-color: <?= $tiengAnh ?>;"><?= $tiengAnh ?></td>
                <td style="background-color: <?= $tiengAnh ?>;"><?= $tiengViet ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>