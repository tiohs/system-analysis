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

    $mesPagamento = 05;

    if($sold[0] >= $emolumento[0]){
      if($service[0] == 'Propina'){
        if($data[0] <= 15 && $mesActual == $mesPagamento){
          $soldEnd = $sold[0] - $emolumento[0];
          echo "Pagamento da propina do mes ".$mesPagamento." no valor de ".number_format($emolumento[0],2,',','.')."kz / saldo apos a operação é de ".number_format($soldEnd,2,',','.')."kz";
        } elseif($mesPagamento > $mesActual){
          $soldEnd = $sold[0] - $emolumento[0];
          echo "Pagamneto da propina do mês : ".$mesPagamento." KZ/ no valor de : ".
          number_format($emolumento[0], 2, ',', '.')." Kz/ Saldo pós-operação ".
          number_format($emolumento[0], 2, ',', '.')." Kz/  ";
        }
      }
    }
    else{
      echo 'Saldo insuficiente';
    }

    // echo $mesActual;
    die();

    echo "O saldo do cartão do aluno ".$students[0]." é de ".number_format($sold[0],2,',','.')."Kz";
  }

  echo pagamentoPropina();

?>
