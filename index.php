<?php

    //PROPRIEDADES
    echo '<h2>PROPRIEDADES</h2>';

    //Chamando/trazendo o arquivo da classe  para que possamos instanciar um objeto a partir dela.
    require_once('./classes/PessoaX.php');

    //Vamos instanciar uma pessoaX(objeto) a partir da classe PessoaX:
    $fulano = new PessoaX();
    $fulano->nome = 'Fulano';
    $fulano->sobrenome = 'da Silva';
    echo $fulano->nome . ' ' . $fulano->sobrenome;
    echo '<br/><hr/><br/>';

     // Vamos instanciar uma nova pessoaX (objeto) a partir da classe PessoaX:
    $beltrano = new PessoaX();
    $beltrano->nome = 'Beltrano';
    $beltrano->sobrenome = "da Silva";
    echo $beltrano->nome . ' ' . $beltrano->sobrenome;
    echo '<br/><hr/><br/>';

    //Vamos instanciar uma última pessoaX (objeto) a partiir da classe PessoaX
    $ciclano = new PessoaX();
    $ciclano->nome = 'Ciclano';
    $ciclano->sobrenome = "da Silva";
    echo $ciclano->nome . ' ' . $ciclano->sobrenome;
    echo '<br/><hr/><br/>';


    //MÉTODOS
    echo '<h2>MÉTODOS</h2>';

    //Chamando/trazendo o arquivo da classe  para que possamos instanciar um objeto a partir dela.
    require_once('./classes/Aluno.php');

     // Vamos instanciar um aluno (objeto) a partir da classe Aluno:
     $rodMack = new Aluno();
     $rodMack->nome = 'Rodrigo Machado';
     echo 'Aluno ' . $rodMack->nome . '<br/>';
     $rodMack->estudar();
     echo '<br/>' . $rodMack->descansar() . '<br/>';
     echo '<br/><hr/><br/>';

    // Vamos instanciar um aluno (objeto) a partir da classe Aluno:
    $luigiProf = new Aluno();
    $luigiProf->nome = 'Luigi Profeti';
    echo 'Aluno ' . $luigiProf->nome . '<br/>';
    $luigiProf->estudar();
    echo '<br/>' . $luigiProf->descansar() . '<br/>';
    echo '<br/><hr/><br/>';


    //PROPRIEDADES - THIS
    echo '<h2>$this</h2>';
    // \ =escape, falso caracter, pra poder colocar em string

    //Chamando/trazendo o arquivo da classe  para que possamos instanciar um objeto a partir dela.
    require_once('./classes/Escola.php');

    // Vamos instanciar uma escola a partir da classe Escola:
    $dhsp = new Escola();
    $dhsp->nomeDaEscola = 'Digital House SP';
    $dhsp->cidade = 'São Paulo';
    $dhsp->localizar();    
    echo '<br/><hr/><br/>';

    // Vamos instanciar uma escola a partir da classe Escola:
    $dhsp = new Escola();
    $dhsp->nomeDaEscola = 'Digital House NY';
    $dhsp->cidade = 'New York';
    $dhsp->localizar();    
    echo '<br/><hr/><br/>';


    //__construct e __destruct
    echo '<h2>CONSTRUCT e DESTRUCT</h2>';

    //Chamando/trazendo o arquivo da classe  para que possamos instanciar um objeto a partir dela.
    require_once('./classes/Professor.php');

    // Vamos instanciar um professor (objeto) a partir da classe Professor:
    $victor = new Professor();

    // __destruct e unset()
    echo '<h3>DESTRUCT com unset()</h3>';

    //Chamando/trazendo o arquivo da classe  para que possamos instanciar um objeto a partir dela.
    require_once('./classes/Aula.php');

    // Vamos instanciar um Aula (objeto) a partir da classe Aula:
    $aula01 = new Aula();
    //Chamando o método destruct através de unset() (descomente o método $aula01->fazerIntervalo() para ver que ocorrerá um erro)
    
    unset($aula01);
    //Chamando o método fazerIntervalo():
    //$aula01->fazerIntervalo(); => não podemos mais acessar o mmétodo fazerIntervalo pois execuytamos o unset() em $aula01, logo, o ciclo de vida desse objeto $aula01 se encerrou(forçammos o método destruct).


    //CONSTRUCT COM PARÂMETRO
    echo '<h2>COSNTRUCT COM PARÂMETRO</h2>';

    //Chamando/trazendo o arquivo da classe  para que possamos instanciar um objeto a partir dela.
    require_once('./classes/Matricula.php');

    // Vamos instanciar um matricula (objeto) a partir da classe Matricula:
    $matricula01 = new Matricula('Abiro Oswaldo');


    //DESAFIO IMC - Índice de MMassa Corpórea(Corporal)
    /*Temos que criar uma classe INdivíduo que contem as propriedades:
        - PESO
        - ALTURA

        Depois precisaremos retornar o IMC desse INDIVIDUO que é calculado através do PESO/(ALTURA*ALTURA)

        obs: Multiplicamos por dez mil pois esperamos receber o peso em KG e a altura e CM.

        Retornar NOME, PESO, ALTURA e IMC de cada objeto instanciado.

    */

    echo '<h3>DESAFIO - IMC</h3>';

    //Chamando/trazendo o arquivo da classe  para que possamos instanciar um objeto a partir dela.
    require_once('./classes/Individuo.php');

    //Vamos instanciar um individuo(objeto) a partir da clsse INdividuo
    $individuo = new Individuo('João', 65, 175);
    
    echo '<br/><hr/><br/>';





?>