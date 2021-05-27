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

    $mesPagamento = 04;

    if($sold[0] >= $emolumento[0]){
      if($service[0] == 'Propina'){
        if($data[0] <= 15 && $mesActual == $mesPagamento){
          $soldEnd = $sold[0] - $emolumento[0];
          echo "Pagamento da propina do mes ".$mesPagamento." no valor de 
          ".number_format($emolumento[0],2,',','.')."kz / saldo apos a operação 
          é de ".number_format($soldEnd,2,',','.')."kz";
        }
        elseif($mesPagamento > $mesActual){
          $soldEnd = $sold[0] - $emolumento[0];
          echo " Saldo do cartão".number_format($sold[0],2,',','.')."
          Pagamento da propina do mes ".$mesPagamento." no valor de 
          ".number_format($emolumento[0],2,',','.')."kz / 
          saldo apos a operação é de ".number_format($soldEnd,2,',','.')."kz";
        }else{
          $propinaMulta = $emolumento[0] + $emolumento[1];
          $soldEnd = $sold[0] - $propinaMulta;
          echo "saldo do cartão: ".number_format($sold[0],2,',','.')."kz".
          " Pagamento da propina do mes de: ".$mesPagamento." no valor de: ".
          number_format($emolumento[0],2,',','.')."kz + Multa no valor de: ".
          number_format($emolumento[1],2,',','.')."kz / Total: ".
          number_format($propinaMulta,2,',','.')."kz / saldo pós-operação: ".
          number_format($soldEnd,2,',','.');
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
