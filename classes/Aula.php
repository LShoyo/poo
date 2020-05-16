<?php

    // __DESTRUCT e unset()
    // O unset() é uma maneira de forçar o destruct.

    // Estamos criando uma classe. Para isso, precisamos usar a keyword class e, em seguida, o nome da classe. Lembrando que as classes, por convenção, começam cada palavra em CaixaAlta.
    class Aula {

        // O método 'mágico' construct (começa com dois underlines) será executado tão logo o objeto for instanciado. Ou seja, quando der um 'new Professor()' o que estiver declarado dentro dele já será executado.
        public function __construct() {
            
            // Declarando um método dentro do método mágico construct
            function iniciarAula() {
                echo "A aula começou! [classe Aula > método construct] <br/>";
            }
            // Executando o método dentro do construct, de forma que será não só declarado mas também executado assim que um novo objeto for instanciado.
            iniciarAula();

        }

        //Declarando um método 'padrão' (não pertence ao construct nem ao destruct)
        public function fazerIntervalo(){

            echo 'Coffee Break!';
        }

         // O método 'mágico' destruct (começa com dois underlines) será executado assim que o ciclo de vida do objeto se encerrar. Como nesse caso temos outros métodos que poderão ser executados que poderão ser executados, ele será executado após rodar otdos os outros métodos (a não ser que a gente execute o unset() antes).
        public function __destruct() {
            
            //Método declarado dentro do destruct
            function terminarAula() {
                echo "<br/>A aula terminou [classe Aula > método destruct]!<br/>";
            }
            //Execução desse mesmo método
            terminarAula();

        }

    }

?>