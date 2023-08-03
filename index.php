<?php
require ("Carro.php");
//nome da classe
class Fruta {
    //nome dos atributos
    private $nome;
    public $cor;

    /*Métodos */

        function __construct($nome, $cor){

            $this->nome = $nome;
            $this->cor = $cor;


        }



 /*   function set_name ($nome){
        $this->nome = $nome;



    }
   function set_cor ($cor){
        $this->cor = $cor;



    }
*/


    function get_name (){
        return $this->nome;
    }

    function get_cor (){
        return $this->cor;
    }

}

// a palavra new cria um objeto do tipo fruta
$maca = new Fruta ("maca_ifsp","vermelho");
/* atribuindo um nome para o meu objeto através do 
método set_name */
//$maca ->set_name("maca_ifsp");
// comando abaico imprime se o atributo for público
//echo $maca->nome;
/*comando abaixo imprime se o atributo 
for public ou private*/
echo "</br>".$maca->get_name();
//$maca->set_cor("vermelho");
echo "</br>".$maca->get_cor();

$carro = new Carro ("Fiat", "Uno", 2020);
echo "</br>";
echo "Marca: ".$carro->get_marca()."</br>";
echo "Modelo: ".$carro->get_modelo()."</br>";
echo "Ano: ".$carro->get_ano()."</br>";
?>



