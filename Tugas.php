No 1 <br>
<?php
echo "Hello World!" ;
?> <br>

No 2<br>

<?php
    $a=1;
    while($a<=10){

        echo $a;
        $a++; 
    }
?><br>

No 3 <br>

<?php
    $maksimal = 25;
    $mulai = 1;
    for($i=$mulai;$i<$maksimal;$i++){

        if($i % 2 == 1) {
            echo "Angka".$i;
            echo "Bilangan Prima <br>";
        } else{
            echo "Angka".$i;
            echo "Bukan Bilangan Prima  <br>";
        }
    }

    
    ?>

No 4<br>
<?php

$nilai = '5';
if ($nilai >= 0){
   $hasil = "Bilangan positif"; 
    
}else{
    $hasil = "Bilangan negatif";

}
 echo $hasil;

   
?><br>



No 5 <br>
<?php
$kalimat =" hello world";
echo strtoupper($kalimat);
?> <br>


No 6<br>


No 7<br>
<?php
 print("H <br>");
 print("E <br>");
 print("L <br>");
 print("L <br>");
 print("O <br>");
?><br>

No 8 <br>
<?php
$data = array("5", "9","13" , "43", "2", "7"); 
sort ($data);

echo"<prev>";
print_r($data);
echo "</prev>";
?>



