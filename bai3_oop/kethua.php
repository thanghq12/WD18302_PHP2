<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an() {
        echo "ăn bằng mồm";
    }
    public function setChan($chan)
    {
        $this->chan = $chan;
    }
}
// nguoiLon muốn sử dụng phương thức và thuoctinh của ConNguoi thì phải thực hiện kế thừa
// từ con người
class NguoiLon extends ConNguoi {

    public  $longNach;

    public function di() {
        echo "Đi bằng".$this->chan." Chan ".$this->tay."Tay";
    }

    public function noi() {

    }
}

class TreCon extends ConNguoi
{

    public function bo()
    {
        echo "Trẻ con bò bằng".$this->chan." Chan".$this->tay."Tay ";
    }

}
$nl = new NguoiLon();
$nl->setChan(2);
//$nl->an();
$nl->di();
$tc = new TreCon();
$tc->setChan(2);
$tc->bo();
// viết hàm setTay và gọi ra
//$tc->an();
