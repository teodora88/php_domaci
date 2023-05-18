<?php
 require '../konekcija.php';
 require '../model/proizvod.php';
 require '../model/kategorija.php';


 if(isset($_POST['proizvodId']) && isset($_POST['kategorija'])&& isset($_POST['imeProizvoda']) && isset($_POST['brojProizvoda']) ){
  $proizvodId=$_POST['proizvodId'];
  $imeProizvoda=$_POST['imeProizvoda'];
  $brojProizvoda=$_POST['brojProizvoda'];


  $proizvod=new Proizvod($proizvodId,$imeProizvoda,$brojProizvoda);
  $rezultat=$proizvod->update($conn);

  if($rezultat){
    echo 'Ok';
 }else{ 
   echo 'Not okay';
   echo $status;
 }
 } 
  ?>