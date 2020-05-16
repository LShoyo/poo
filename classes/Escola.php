  
<?php

// THIS
// A palavra chave (keyword) $this refere-se ao objeto que será instanciado a partir da classe.

// Estamos criando uma classe. Para isso, precisamos usar a keyword class e, em seguida, o nome da classe. Lembrando que as classes, por convenção, começam cada palavra em CaixaAlta.
class Escola {

    // Propriedade pública 'nomeDaEscola'
    public $nomeDaEscola;
    
    // Propriedade pública 'cidade'
    public $cidade;

    // Método chamado 'localizar' que utilizará o nome da cidade (propriedade) da escola instanciada.
    public function localizar() {

        // Retornando uma frase (com o echo) utilizando a propriedade 'cidade' vinculada ao objeto a ser instanciado a partir dessa classe 'Escola'
        echo "A escola " . $this->nomeDaEscola . " está situada em " . $this->cidade . "<br/>";

    }

}

?>