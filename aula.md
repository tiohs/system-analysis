
### <?php
  # function pagamentoPropina(){
    $students = ['Pedro Almeida', 'José Filipe', 'Luana Santos'];
    // var_dump($students); verificar os valores retornados pela variavel
    $sold = [120000, 360000, 90000];
    $emolumento = [36725, 7345];
    $service = ['Propina', 'Multa'];
    
    $data = date('d/m/y');
    $data = explode("/", date('d/m/y'));
    echo $data;
    die(); //matar o codigo de baixo

    echo "O saldo do cartão do aluno ".$students[0]." é de ".number_format($sold[0],2,',','.')."Kz";
    //number format 4 parametros 1*var que trazer o valor numerico 
    //2* 2 representa as duas casa decimais; 
    //3*',' representa as duas casa decimais
    //4*'.' representa as casas das milessimas
  ## }

  ## echo pagamentoPropina();

### ?>

### si