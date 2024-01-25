<?php 

function absensisimple ($noabsen, $kondisiterminasi, $kt1, $Kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    for ($noabsen; $noabsen <= $kondisiterminasi; $noabsen++){
        if ($noabsen == $kt1 || $noabsen == $Kt2 || $noabsen == $kt6){
            echo "peserta didik no absen : $noabsen tidak hadir <br />";
        }else if ($noabsen == $kt3 || $noabsen == $kt4){
            echo "peserta didik no absen : $noabsen terlambat <br />";
        }else if ($noabsen == $kt5 || $noabsen == $kt7){
            echo "peserta didik no absen : $noabsen sakit <br />";
        }else {
            echo "peserta didik absen : $noabsen hadir <br />";
        }
    }
}
  
    echo absensisimple(1, 15, 2, 3, 6, 8, 9, 10, 13)


?>