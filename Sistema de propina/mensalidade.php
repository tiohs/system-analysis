<?php
  function pagamentoPropina(){
    $students = ['Pedro Almeida', 'José Filipe', 'Luana Santos'];

    $sold = [120000, 360000, 90000];
    $emolumento = [36725, 7345];
    $service = ['Propina', 'Multa'];

    // $data = date('d/m/y');
    $data = explode("/", date('d/m/y'));
    
    $mesActual = $data[1];
    $mesAnterior = $mesActual - 1;
    $mesPosterior = $mesActual + 1;

    $mesPagamento = 1;

    if($saldo[0] >= $emolumento[0]){
      if($service[0] == "Propina") {
        if($data[0] <= 15 && $mesActual == $mesPagamento){
            $saldoFinal = $saldo[0] - $emolumento[0];
        }
      }
    }else {
      echo "Saldo Insuficiente "
    }
    echo $mesActual;
    die();

    echo "O saldo do cartão do aluno ".$students[0]." é de ".number_format($sold[0],2,',','.')."Kz";
  }

  echo pagamentoPropina();

?>
