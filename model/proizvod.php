<?php
class Proizvod{
  public $proizvodId;
  public $imeProizvoda;
  public $brojProizvoda;
  public $cena;
  public $kategorijaId;

  function __construct($proizvodId=null,$imeProizvoda=null,$brojProizvoda=null,$cena=null,$kategorijaId=null) {
        $this->proizvodId = $proizvodId;
        $this->imeProizvoda = $imeProizvoda;
        $this->brojProizvoda = $brojProizvoda;
        $this->cena = $cena;
        $this->kategorijaId=$kategorijaId;
    }

    public function insert($conn){
      return $conn->query("INSERT INTO proizvodi(imeProizvoda,brojProizvoda,cena,kategorijaId) VALUES ('$this->imeProizvoda','$this->brojProizvoda','$this->cena','$this->kategorijaId')");
  }

  public function delete($conn,$id){
    return $conn->query("DELETE FROM proizvodi where proizvodId=$id");
  }

  public function update($conn){
    return $conn->query("UPDATE proizvodi SET imeProizvoda='$this->imeProizvoda',brojProizvoda='$this->brojProizvoda' where proizvodId=$this->proizvodId");
}

public static function getById($id, $conn){
  return $conn->query("SELECT * FROM proizvodi WHERE proizvodId = $id");
}


}

?>