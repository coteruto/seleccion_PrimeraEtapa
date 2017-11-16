<?php

class Calculador{
    public static function calcularFecha($fecha, $numero){
        $fecha_encontrada = false;
        $contador=0;
        $fechaObjetivo = $fecha;
        while(!$fecha_encontrada){
            $fecha_nextDay = date("Y-m-d",strtotime("+1 day",strtotime($fechaObjetivo)));
            $fechaObjetivo = $fecha_nextDay;
            $dia = date("w",strtotime($fechaObjetivo));
            if($dia === '0' || $dia === '6'){
                continue;
            }
            $contador++;
            if($contador == $numero)
                $fecha_encontrada = true;
        }
        return $fechaObjetivo;
    }
}