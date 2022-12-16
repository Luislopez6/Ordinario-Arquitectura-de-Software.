<?php
class Circo{
    public $payaso;
    public $leon;
    public $tigre;
    public $elefante;
    public $presentador;

    function __construct($payaso, $leon, $tigre, $elefante, $presentador)
    {
        $this ->payaso = $payaso;
        $this->leon = $leon;
        $this->tigre = $tigre;
        $this->elefante = $elefante;
        $this->presentador = $presentador;
    }
    
public function getPayaso(){
    return $this ->payaso;
}
    public function setPayasos($payaso){
         $this -> payaso;
    }
    public function getLeon(){
        return $this ->leon;

    }
    public function setLeon($leon){
        $this->leon;
    }
    public function getTigre(){
        return $this ->tigre;
    }
    public function setTigre($tigre){
        $this->tigre;
    }
    public function getElefante(){
        return $this ->elefante;
    }
    public function setElefante($elefante){
        $this->elefante;
    }
    public function getPresentador(){
        return $this ->presentador;
    }
    public function setPresentador($presentador){
        $this->presentador;
    }
    function getDatos()
    {
        return $this->payaso." ".$this->leon." ".$this->tigre."".$this->elefante."".$this->presentador."".'<br><br>';
    }
    function contar(){
        $contarpayaso=0;
        $contarleon=0;
        $contartigre=0;
        $contarelefante=0;
        $contarpresentador=0;

        $Circos = array('payaso', 'leon', 'tigre','elefante','presentador');

        foreach ($Circos as $circo){
            echo $circo.'<br/>';
            if ($circo=='payaso'){
                $contarpayaso++;
            }
        }
    }
}
$payaso = new circo (" El payaso es uno de los primeros en las cuales aparecen ", " en el show ", "su nombre el pepe "," juega con el leon "," mostrando todo sus trucos " );
$leon = new circo (" El leon hace su entrada  ", " rugiendo ", " y corriendo "," y trapando varios objetos "," pelotas,cajas ");
$tigre = new circo (" El tigre hace su entrada corriendo ", " de repente el payaso se sube ", " a su lomo "," tirando dulces "," de colores ");
$elefante = new circo (" El elefante entra con una gran pelota  ", " de color Blanco ", " este tiene una trompa larga "," tirando "," agua ");
$presentador= new circo(" El presentador da inicio presentando a "," todos comenzando con los payasos "," leones,tigres y por ultimo los elefantes "," el presentador hace una ","reverencia");

echo '<h1> Bienvenidos a nuestro Circo</h1>';
   echo $payaso -> getDatos();
   echo $leon -> getDatos();
   echo $tigre -> getDatos();
   echo $elefante -> getDatos();
   echo $presentador -> getDatos();

   echo'<br>Disponibles los sabados<br> <br>';
   echo $payaso -> contar();
?>