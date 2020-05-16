<?php
    
    //MÉTODOS:
    //São ações declaradas na classe (abstração) e que serão atrelados aos objetos que forem instanciados a partir dessa mesma classe. No eexemplo a seguir, estamos criando um método (ação/função) 'estudar' e outro método 'descansar' que serão atreladas aos objetos criados a partir dessa classe.

    //Estamos criando uma class. Para isso precisamos usar a keyword class e em seguida, o nome da classe. Lembrando que as classes, por convencao, comecam cada palavra em CAIXA ALTA.(ex: CaixaAlta)
    class Aluno{

        //Propriedade pública 'nome'
        public $nome;

        //Método público 'estudar' - retorna um 'echo'
        public function estudar(){
            echo 'O aluno está estudando';
        }

        //Método público 'descansar' - retorna uma string
        public function descansar(){
            return 'O aluno está descansando';
        }
    }

?>
