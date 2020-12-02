<?php 
class Home extends Controller{
    function SayHi(){
        $hung = $this->model("SinhVienModel");
        echo $hung->GetSV();
    }
    function Show($a,$b){

        //model
        $hung = $this->model("SinhVienModel");
        $tong = $hung->Tong($a,$b);

        //view
        $this->view("MasterPage2",[
            "Number"=>$tong,
            "Page"=>"contact",
            "Mau"=>"red",
            "SV"=>$hung->SinhVien(),
        ]);
    }
}
?> 