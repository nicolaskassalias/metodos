<?php
class Conta{
    public $numero;
    public $saldo=0;
    function deposita(float $valor){
      if(is_float($valor)){
          $this->saldo +=$valor;
      }else{
          die('O valor deve ser float');
      }
  }
}

?>
