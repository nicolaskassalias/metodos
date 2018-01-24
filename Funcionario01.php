<?php
class Funcionario{
    public $nome;
    public $salario=0;
    function aumentaSalario(float $valor){
      if(is_float($valor)){
          $this->salario +=$valor;
      }else{
          die('O valor deve ser float');
      }
  }

    function consultaDados(){
      echo "\tNome: $this->nome".PHP_EOL;
      echo "\tSalário: $this->salario".PHP_EOL;
    }

}

?>
