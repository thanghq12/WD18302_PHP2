<?php
//định nghĩa class sinh vien
class SinhVien {
    // khai báo thuộc tính tức khai báo biến trong class
    public $maSV;// biến trong class
    public $tenSV;
    public $namSinh;
    // Phương thức khởi tạo -> Hàm Tạo (Magic function)
    public function __construct($maSV,$tenSV,$namSinh) // cú pháp /
    {
        // set luôn giá trị khi khởi tạo
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
        $this->namSinh = $namSinh;
    }

    // khai báo phuong thuc set gia trị cho thuộc tính
    public function setMaSV($maSV) //tham số
    {
        $this->maSV = $maSV;
    }
    // khai báo phương thức tức là khai báo hàm trong class
    public function hienThiThongTinSV()
    {
        //nếu muon sử dụng thuộc tính trong phương thức thì ta phải su dụng từ khóa $this
        echo "Ma SV:".$this->maSV."tên SV".$this->tenSV."năm sinh".$this->namSinh;

    }

}
//khởi tạo đối tượng tao ra 1 đối tượng SV
$sv = new SinhVien("PH12345","thang",2003);//giá trị khởi tạo ban đầu
//khi thực hiện new Class (Khởi tạo đối tượng) thì hàm đầu tiên được chạy vào là hàm construct
$sv->setMaSV("abc");

// tạo 2 hàm set đối với tên SV và mã SV
$sv->hienThiThongTinSV();

//tạo 1 class GiangVien gồm các
// thuộc tính: maGV,tenGV,namLamViec,luong
// tạo các phương thức set cho tất cả các thuộc tính trên
// tạo phưng thức hiển thị thông tin GV hiển thị đầy đủ caác
// thoong tin
// khởi tạo đối tượng GV và gọi hàm hienThiThongTinGV