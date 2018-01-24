<?php
class Conta{
    public $numero;
    public $saldo=0;
    public $limite=100;
    public $Agencia="agencia";
    function deposita(float $valor){
      if(is_float($valor)){
          $this->saldo +=$valor;
      }else{
          die('O valor deve ser float');
      }
  }
  function saca(float $valor){
    if(is_float($valor)){
        if ($this->saldo>=$valor){
            $this->saldo -=$valor;
        }else{
            echo "Saldo : $this->saldo insuficiente".PHP_EOL;
        }
    }else{
        die('O valor deve ser float');
    }
 }
    function imprimeExtrato(){
      echo "\tNumero: $this->numero".PHP_EOL;
      echo "\tSaldo: $this->saldo".PHP_EOL;
      echo "\tLimite: $this->limite".PHP_EOL;
      echo "\tAgencia: $this->Agencia".PHP_EOL;
    }
    function consultaSaldo(){
      echo "Saldo: $this->saldo".PHP_EOL;
    }
}

?>
