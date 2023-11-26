Atividade 1 :

<?php
    $numeros = array(1, 22, 333);

    for($i = 0; $i < 3; $i++){

        print $numeros[$i] . "-";
    }

Memrória:
0 1 2 3 //quando chegar ao 3, sai do for

Console/ Terminal:
1-22-333-  


Atividade 2:

<?php
   $sete_maravilhas = array(
        "Cristo Redentor",
        "Chichén Itzá",
        "Coliseu",
        "Muralha da China",
        "Petra",
        "Machu Picchu",
        "Taj Mahal"
    );

    for($i=0; $i < 7; $i++){

        print($i+1) . ": " . $sete_maravilhas[$i] . "\n";

        }

Memória:
0 1 2 3 4 5 6 7 //quando o valor chega ao 7, ele sai do for

Console/ Terminal:
1: Cristo Redentor
2: Chichén Itzá
3: Coliseu
4: Muralha da China
5: Petra
6: Machu Picchu
7: Taj Mahal


Atividade 3:

<?php
    $sete_maravilhas = array(
        "Cristo Redentor",
        "Chichén Itzá",
        "Coliseu",
        "Muralha da China",
        "Petra",
        "Machu Picchu",
        "Taj Mahal"
);
    $valor_buscado = "Coliseu";

    for($i = 0; $i < 7; $i++){

        if ($sete_maravilhas[$i] == $valor_buscado) {
            print("o valor buscado está entre as maravilhas");
            break;
            }
        }

Memória:
0 1 2

Console/ Terminal:
o valor buscado está entre as maravilhas


Atividade 4:

<?php

    $mega_sena = [33, 4, 47, 7, 11, 25];
    $aux = 0;

    for($i = 0; $i < 6; $i++){

        for($j = 0; $j < 5; $j++){

            if($mega_sena[$j] > $mega_sena[$j + 1]){

                $aux = $mega_sena[$j];
                $mega_sena[$j] = $mega_sena[$j + 1];
                $mega_sena[$j + 1] = $aux;
            }
        }
    }
    for($i = 0; $i < 6; $i++){
      print $mega_sena[$i] . " - ";
    }


Memória:
0 1 2 3 4 5 6  //o que encerra os dois for

Console/ Terminal:
4 - 7 - 11 - 25 - 33 - 47 - 

Atividade 5:

<?php

    $matriz = [
    [1, 3, 5],
    [7, 9, 11],
    [13, 15, 17]
];

for($c =0; $c < 3; $c++){
    for($l = 0; $l < 3; $l++){
        print_r ($matriz[$c][$l]);
        print " ";
    }
    print "\n";
}

Atividae 6:

<?php

    $matriz = [
        [1, 3, 5],
        [7, 9, 11],
        [13, 15, 17]
    ];

    $soma = 0;

    for ($l = 0; $l < $3; $l++) {
        for ($c = 0; $c < 3; $c++) {
            $matriz_reserva = $matriz[$l][$c];
            $soma = $soma + $matriz_reserva;
        }
    }

    print "A soma dos números na matriz é de: " . $soma;

Atividade 7:

<?php

    $matriz = [];
    
    
    for($l = 0; $l < 3; $l++){
    	for($c = 0; $c < 5; $c++){
    		$valor_informado = readline('Digite um número inteiro: ');
    		$matriz [$l][$c]= $valor_informado;
    		print "\n";
    	}
    }
    
    for($l = 0; $l < 3; $l++){
    	for($c = 0; $c < 5; $c++){
    		print_r ($matriz[$l][$c]);
    		print " ";
    	}
    	print "\n";
    }
    
     for ($l = 0; $l < 3; $l++)  {
        for ($c = 0; $c < 5; $c++)  {
            if ($matriz[$l][$c] % 2 == 0){
                print "Numero par: ";
                print_r ($matriz[$l][$c]);
                print "\n" . "Posicao:  na linha ($l) e na coluna ($c)" . "\n";
    		  }
		 }
     }

Atividade 8:

<?php

  $lista_frutas = ['banana', 'abacaxi', 'melão', 'morango'];
    print "Teste 0: ";
      var_dump(count($lista_frutas));
    print "\nTeste 1: ";
      var_dump(in_array('banana', $lista_frutas));
    print "\nTeste 2: ";
      var_dump(in_array('alface', $lista_frutas));
    print "\nTeste 3: ";
      var_dump(array_search('morango', $lista_frutas));
    print "\nTeste 4: ";
      var_dump(sort($lista_frutas));
    print "\nTeste 5: ";
      var_dump(shuffle($lista_frutas));

Console/ Terminal:

Teste 0: int(4) 
// mostra quantidade de elementos no array.

Teste 1: bool(true) 
// verifica se o elemento está no array, e o resultado quer dizer que a string "banana" está no array.
  
Teste 2: bool(false)
// verifica se o elemento está no array, quer dizer que a string "alface" não está no array.
  
Teste 3: int(3) 
// verifica a posição  do elementono array, e 3 é a posicao do "morango" no array, pois, o array comeca em 0.
  
Teste 4: bool(true) 
// a funcao sort reordena o array e retorna o valor falso quando o sort não é bem-sucedido, e como efetuou o sort, o var_dump retornou verdadeiro.
  
Teste 5: bool(true)  
// a função shuffle embaralha o array, e como foi efetuada, o var_dump retonou verdadeiro.

Atividade 9:

<?php

    $pessoa = ['nome' => 'John Doe', 'idade' => 54, 'altura' => 1.8, 'formacao' => 'Físico', 'profissao' => 'Astronauta'];

    print "Teste 0: ";
        var_dump(count($pessoa));
    print "\nTeste 1: ";
        var_dump(in_array('Físico', $pessoa));
    print "\nTeste 2: ";
            var_dump(in_array('Detetive', $pessoa));
    print "\nTeste 3: ";
        var_dump(array_search('nome', $pessoa));
    print "\nTeste 4: ";
        var_dump(array_key_exists('profissao', $pessoa));
    print "\nTeste 5: ";
        var_dump(array_key_first($pessoa));
    print "\nTeste 6: ";
        var_dump(array_key_last($pessoa));
    print "\nTeste 7: ";
        var_dump(sort($pessoa));

Console/ Terminal:

Teste 0: int(5)  
//conta quantos elementos tem o array.

Teste 1: bool(true) 
// verifica se a string "fisico" está no array e retornou "true" porque este elemento está no array.

Teste 2: bool(false) 
// verifica se a string "detetive" está no array, e retornou "false" pois o elemento não está no array.

Teste 3: bool(false) 
// verifica se acha a string "nome", porém, "nome" é uma key, por isso o valor retornado foi "false".

Teste 4: bool(true) 
// verifica se acha a key "profissao", e retornou "true" porque achou esta key.

Teste 5: string(4) "nome"  
// a função retona o valor da primeira key e quantos caracteres há nela, e exibe o valor da kay ao lado.

Teste 6: string(9) "profissao" 
// a função retona o valor da última key e quantos caracteres há nela, e exibe o valor da kay ao lado.

Teste 7: bool(true)
// a funcao sort reordena o array e retorna o valor falso quando o sort não é bem-sucedido, e como efetuou o sort, o var_dump retornou verdadeiro.

Atividade 10:

<?php
    
    function modoficar (&$string, &$caractere) 
    {
        $apareceu = substr_count($string, $caractere);
        // a substr_count conta quantas vezes o $caractere aparece na $string e retorna este valor em um númeor inteiro na $apareceu
        $string = str_replace($caractere, '', $string);
        // a str_replace procura a $caractere na $string e substitui pelo valor do meio quue é '' um espaço vazio, e retona a $string sem o valor do $caractere
        print "A string apareceu " .  $apareceu . " vezes." . "\n";
      
    }
    
    $teste = readline('Digite uma frase para ser modificada pela função: ');//string que vai ser modificada pela função
    print "\n";
    $teste2 = readline('Digite o caracter que será removido da frase digitada acima: ');//caracter que vai ser removido da string
    print "\n";
    print "A string a ser modificada é: " . $teste . "\n";
    print "O caractere a ser retirado é: " . $teste2 . "\n";

    modoficar($teste, $teste2);

    print "A string foi modificada pela função e passa a ser: " . $teste . "\n";

 Console/ Terminal:

Digite uma frase para ser modificada pela função: Scuderia Ferrari
Digite o caracter que será removido da frase digitada acima: r
A string a ser modificada é: Scuderia Ferrari
O caractere a ser retirado é: r
A string apareceu 4 vezes.
A string foi modificada pela função e passa a ser: Scudeia Feai
//tudo que está depois do sinal ":" foi digitado pelo usuário.

//se o caracter for normal e na string também tiver esse caracter, porém com acento, ele não será removido da string


