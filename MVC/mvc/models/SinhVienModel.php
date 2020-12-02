<?php 
class SinhVienModel extends DB{
    public function GetSV(){
        return "HUNG HOI - HAIR NOT FOUND";
    }
    public function Tong($n,$m){
        return $n + $m;
    }
    public function SinhVien(){
        $qr = "select * from sinhvien";
        return mysqli_query($this->con,$qr);
        // neu co Mobile APP thi nen chuyen ve dang JS_encode con khong thi thoi
        
    }
}
?>
