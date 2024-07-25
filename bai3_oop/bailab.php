<?php
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
class ConNguoi {
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $soDienThoai;
    public $email;
    public function setHoTen($hoTen)
    {
        $this->hoTen = $hoTen;
    }
    public function setDiaChi($diaChi)
    {
        $this->diaChi = $diaChi;
    }
    public function setNamSinh($namSinh)
    {
        $this->namSinh = $namSinh;
    }
    public function setSoDienThoai($soDienThoai)
    {
        $this->soDienThoai = $soDienThoai;
    }
    public function setEmail($email)
    {
        $this->email =$email;
    }
    public function tinhTuoi()
    {
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin()
    {
        echo $this->hoTen."-".$this->diaChi."-".$this->tinhTuoi()."-".$this->email."-".$this->soDienThoai;
    }
}
class HocSinh extends ConNguoi
{
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function setDiemToan($diemToan)
    {
        $this->diemToan = $diemToan;
    }
    public function setDiemly($diemLy)
    {
        $this->diemLy = $diemLy;
    }
    public function setDiemHoa($diemHoa)
    {
        $this->diemHoa = $diemHoa;
    }
    public function tinhDiemTB()
    {
        return ($this->diemHoa + $this->diemToan + $this->diemLy)/3;
    }
    public function hienThiThongTinHs()
    {
        $this->hienThiThongTin();
        echo $this->tinhDiemTB();
    }
}
// lam tuong tu voi class GV
$hs = new HocSinh();
$hs->setHoTen("Thang");
$hs->setNamSinh(1996);
$hs->setDiemToan(8);
$hs->setDiemly(7);
$hs->setDiemHoa(8);
$hs->hienThiThongTinHs();