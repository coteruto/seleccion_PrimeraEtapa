<?php

class Validador {

    private $fecha1;
    private $fecha2;
    private $fecha3;
    private $fecha4;
    private $numero1;
    private $numero2;
    private $numero3;
    private $numero4;
    private $error_fecha1;
    private $error_fecha2;
    private $error_fecha3;
    private $error_fecha4;
    private $error_numero1;
    private $error_numero2;
    private $error_numero3;
    private $error_numero4;
    private $error_ordenFecha;
    private $aviso_inicio;
    private $aviso_cierre;

        public function __construct($fecha1, $fecha2, $fecha3, $fecha4, $numero1, $numero2, $numero3, $numero4) {
        $this->error_ordenFecha = "";
        
        $this->error_fecha1 = $this->validarFecha($fecha1,1);
        $this->error_fecha2 = $this->validarFecha($fecha2,2);
        $this->error_fecha3 = $this->validarFecha($fecha3,3);
        $this->error_fecha4 = $this->validarFecha($fecha4,4);
        $this->error_numero1 = $this->validarNumero($numero1,1);
        $this->error_numero2 = $this->validarNumero($numero2,2);
        $this->error_numero3 = $this->validarNumero($numero3,3);
        $this->error_numero4 = $this->validarNumero($numero4,4);
        
        if($this->error_fecha1 === "" && $this->error_fecha2 === "" && $this->error_fecha3 === "" && $this->error_fecha4 === "")
            $this->error_ordenFecha = $this->validarOrdenFecha($fecha1,$fecha2,$fecha3,$fecha4);

        $this->aviso_inicio = '<br><div class="alert alert-danger" role="alert">';
        $this->aviso_cierre = '</div>';
    }

    private function comprobarValorNulo($valor_campo) {
        $comprobador = true;
        if (isset($valor_campo) && !empty($valor_campo))
            $comprobador = false;
        return $comprobador;
    }

    private function validarFecha($fecha,$nCampo) {
        if ($this->comprobarValorNulo($fecha)) {
            return "Este campo es obligatorio.";
        } else {
            switch ($nCampo) {
                case 1:
                    $this->fecha1 = $fecha;
                    break;
                case 2:
                    $this->fecha2 = $fecha;
                    break;
                case 3:
                    $this->fecha3 = $fecha;
                    break;
                case 4:
                    $this->fecha4 = $fecha;
                    break;
            }
        }
        if (date("w",strtotime($fecha)) === '0' || date("w",strtotime($fecha)) === '6')
            return "La fecha seleccionada debe corresponder a un día hábil.";
        return "";
    }
    
    private function validarNumero($numero,$nCampo) {
        if ($this->comprobarValorNulo($numero)) {
            return "Este campo es obligatorio.";
        } else {
            switch ($nCampo) {
                case 1:
                    $this->numero1 = $numero;
                    break;
                case 2:
                    $this->numero2 = $numero;
                    break;
                case 3:
                    $this->numero3 = $numero;
                    break;
                case 4:
                    $this->numero4 = $numero;
                    break;
            }
        }
        return "";
    }
    
    private function validarOrdenFecha($fecha1,$fecha2,$fecha3,$fecha4){
        if($fecha1<$fecha2 && $fecha2<$fecha3 && $fecha3<$fecha4)
            return "";
        else
            return "Las fechas ingresadas deben estar ordenadas de menor a mayor";
    }
    
    public function getFecha1(){
        return $this->fecha1;
    }
    
    public function getFecha2(){
        return $this->fecha2;
    }
    
    public function getFecha3(){
        return $this->fecha3;
    }
    
    public function getFecha4(){
        return $this->fecha4;
    }
    
    public function getNumero1(){
        return $this->numero1;
    }
    
    public function getNumero2(){
        return $this->numero2;
    }
    
    public function getNumero3(){
        return $this->numero3;
    }
    
    public function getNumero4(){
        return $this->numero4;
    }
    
    public function mostrarFecha1(){
        echo 'value="'.$this->fecha1.'"';
    }
    
    public function mostrarFecha2(){
        echo 'value="'.$this->fecha2.'"';
    }
    
    public function mostrarFecha3(){
        echo 'value="'.$this->fecha3.'"';
    }
    
    public function mostrarFecha4(){
        echo 'value="'.$this->fecha4.'"';
    }
    
    public function mostrarNumero1(){
        echo 'value="'.$this->numero1.'"';
    }
    
    public function mostrarNumero2(){
        echo 'value="'.$this->numero2.'"';
    }
    
    public function mostrarNumero3(){
        echo 'value="'.$this->numero3.'"';
    }
    
    public function mostrarNumero4(){
        echo 'value="'.$this->numero4.'"';
    }
    
    public function mostrarError_fecha1() {
        if ($this->error_fecha1 !== "")
            echo $this->aviso_inicio . $this->error_fecha1 . $this->aviso_cierre;
    }

    public function mostrarError_fecha2() {
        if ($this->error_fecha2 !== "")
            echo $this->aviso_inicio . $this->error_fecha2 . $this->aviso_cierre;
    }

    public function mostrarError_fecha3() {
        if ($this->error_fecha3 !== "")
            echo $this->aviso_inicio . $this->error_fecha3 . $this->aviso_cierre;
    }
    
    public function mostrarError_fecha4() {
        if ($this->error_fecha4 !== "")
            echo $this->aviso_inicio . $this->error_fecha4 . $this->aviso_cierre;
    }

    public function mostrarError_numero1() {
        if ($this->error_numero1 !== "")
            echo $this->aviso_inicio . $this->error_numero1 . $this->aviso_cierre;
    }

    public function mostrarError_numero2() {
        if ($this->error_numero2 !== "")
            echo $this->aviso_inicio . $this->error_numero2 . $this->aviso_cierre;
    }

    public function mostrarError_numero3() {
        if ($this->error_numero3 !== "")
            echo $this->aviso_inicio . $this->error_numero3 . $this->aviso_cierre;
    }
    
    public function mostrarError_numero4() {
        if ($this->error_numero4 !== "")
            echo $this->aviso_inicio . $this->error_numero4 . $this->aviso_cierre;
    }
    
    public function mostrarError_ordenFecha() {
        if ($this->error_ordenFecha !== "")
            echo $this->aviso_inicio . $this->error_ordenFecha . $this->aviso_cierre;
    }

    public function formularioCorrecto() {
        if ($this->error_fecha1 === "" && $this->error_fecha2 === "" && $this->error_fecha3 === "" &&
                $this->error_fecha4 === "" && $this->error_numero1 === "" && $this->error_numero2 === "" &&
                $this->error_numero3 === "" && $this->error_numero4 === "" && $this->error_ordenFecha === "") {
            return true;
        }
        return false;
    }

}
