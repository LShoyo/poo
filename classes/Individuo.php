<?php

    //DESAFIO IMC - Nível 1
    //Podemos declarar nosso método construct já enviando parâmetros, economizando assim umas boas linhas de código.

    // Estamos criando uma classe. Para isso, precisamos usar a keyword class e, em seguida, o nome da classe. Lembrando que as classes, por convenção, começam cada palavra em CaixaAlta.
    class Individuo{

        //Criando uma propriedade pública
        public $nome;
        public $peso;
        public $altura;
        
        //Criando o método construct com  3 parâmetros (no caso estou diferenciando o noem da propriedade -$nome - do parâmemtro recebido - $nomeRecebido, mas é comu que ambos recebam um mesmo nome).
        public function __construct($nomeRecebido, $pesoRecebido, $alturaRecebida){

            //atrelando o valro dos parametros recebidos as prorpiedades
            $this->nome = $nomeRecebido;
            $this->peso = $pesoRecebido;
            $this->altura = $alturaRecebida;

            function calcularImc($peso, $altura){
                //retorna o resultado do cálculo consideerando o peso recebido em kg e altura em cm
                return ($peso / ($altura * $altura) * 10000);
            }
            echo 'O IMC de ' . $this->nome .' (que pesa ' . $this->peso . ' kg e mede ' . $this->altura . ' cm) é ' . calcularImc($this->peso, $this->altura) . '<br/><hr/><br/>';
           
        }
    }

?>