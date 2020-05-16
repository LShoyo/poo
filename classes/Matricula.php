<?php

    //__CONSTRUCT COM PARÂMETRO
    //Podemos dfeclarar nosso método construct já enviando parâmetros, economizando assim umas boas linhas de código.

    // Estamos criando uma classe. Para isso, precisamos usar a keyword class e, em seguida, o nome da classe. Lembrando que as classes, por convenção, começam cada palavra em CaixaAlta.
    class Matricula{

        //Criando uma propriedade pública
        public $nome;

        //Criando o método construct com parâmetro (no caso estou diferenciando o noem da propriedade -$nome - do parâmemtro recebido - $nomeRecebido, mas é comu que ambos recebam um mesmo nome).
        public function __construct($nomeRecebido) {

            //Aqui vamos atrelar o parâmetro recebido à propriedade do objeto a ser instanciado ( com a ajuda do $this)
            $this->nome = $nomeRecebido; 
            //atrelando o nomemRecebido (parametro) a propriedade nome pelo $this
            //echo $this->nome; (mostrando que atrelamos o valor enviado como parâmetro ao instanciarmos ao objeto - por causa do construct - à propriedade nome($this->nome)).

            //Método declarado dentro do construct que recebe um parâmetro($nomeParametro) e retorna um echo.
            function seMatricular($nomeParametro){
                //parametro diferente do anterior, valor qualquer
                echo '<br/> O aluno ' . $nomeParametro . 'está matriculado!<br/>';
            }
            //executando o método seMatricular enviando como parâmemtro o valor da propriedade nome($this->nome). Mas poderia ser qualquer valor(experimente trocar o parametro enviado para o seu nome)
            seMatricular($this->nome);
            seMatricular('Michael J ');

        }

        // O método 'mágico' destruct (começa com dois underlines) será executado assim que o ciclo de vida do objeto se encerrar. Como nesse caso temos outros métodos que poderão ser executados que poderão ser executados, ele será executado após rodar otdos os outros métodos (a não ser que a gente execute o unset() antes).
        public function __destruct() {

             //Método declarado dentro do destruct que recebe um parâmetro($nomeParametroDiferente) e retorna um echo.
            function seFormar($nomeParametroDiferente){
                echo 'O aluno.' . $nomeParametroDiferente . ' Se formou! UH! [classe Matricula > método destruct]<br/>';

            }
            //executando o método seMatricular enviando como parâmemtro o valor da propriedade nome($this->nome). Mas poderia ser qualquer valor(experimente trocar o parametro enviado para o seu nome)
            seFormar($this->nome);
        }
    }

?>