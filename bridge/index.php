<?php
interface APIDesenho {
    //definindo a interface padrão de recebimento de dados 
    public function desenharCirculo($x, $y, $radius);
}

//Criando duas classes que puxam o padrão de interface e imprime o desenho
class APIDesenho1 implements APIDesenho{
    public function desenharCirculo($x, $y, $radius){
        echo "Desenhando Círculo, v1: ".$x." - ".$y." - .".$radius;
    }
}

class APIDesenho2 implements APIDesenho{
    public function desenharCirculo($x, $y, $radius){
        echo "Desenhando Círculo, v2: ".$x." - ".$y." - ".$radius;
    }
}
//Classe abastratada pai que vai receber os metodos da classe filha e passar para as interfaces
abstract class Forma {

    protected $api;
    protected $x;
    protected $y;
    public function __construct(APIDesenho $api){
        $this->api = $api;
    }
}

//Circulo irar passar as informações necessárias para renderização do desenho
class Circulo extends Forma{

    protected $radius;

    public function __construct($x, $y, $radius, APIDesenho $api){
        //puxando as predefinições da classe pai e repessando os valores 
        parent::__construct($api);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    //Definindo o deseho
    public function desenhar(){
        $this->api->desenharCirculo($this->x, $this->y, $this->radius);
    }
}
//Definindo qual classe usar na renderização dos valores especificados 
$circulo = new Circulo(1, 3, 7, new APIDesenho2());
$circulo->desenhar();