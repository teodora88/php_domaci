<?php
 require '../konekcija.php';
 require '../model/proizvod.php';


 if(isset($_POST['imeProizvoda']) && isset($_POST['brojProizvoda']) && isset($_POST['cena']) && isset($_POST['kategorijaId'])){
  $proizvod = new Proizvod(null,$_POST['imeProizvoda'],$_POST['brojProizvoda'],($_POST['cena']),($_POST['kategorijaId']));
  $rez=$proizvod->insert($conn);

  if($rez){ 
    echo 'Ok';
 }else{ 
   echo 'Not okay';
 }
 } 
  ?>