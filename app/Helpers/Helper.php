<?php
namespace App\Helpers;

use App\Configtemp;
use App\Configumid;

class Helper {
    
    public static $motivo = "";

    //{{ ($item->temperatura > App\Configtemp::getTempMax($item->indice_dias) 
    //? " style = 'color: red;' " : "") }}
    
    public static function getCiclo($idx)
    {
        return Configtemp::getCiclo($idx);
    }
    
    public static function alertaTemp($idx, $temp)
    {
        if ($temp > Configtemp::getTempMax($idx)
                || $temp < Configtemp::getTempMin($idx))
        {
            return " style = 'color: red;' ";
        }
        
        return "";
    }
    
    public static function alertaUmid($idx, $umid)
    {
        if ($umid > Configumid::getUmidMax($idx)
                || $umid < Configumid::getUmidMin($idx))
        {
            return " style = 'color: red;' ";
        }
        
        return "";
    }
    
    public static function alertaAmonia($amonia)
    {
        if ($amonia > 25)
        {
            return " style = 'color: red;' ";
        }
        
        return "";
    }
    
    public static function alertaResumo()
    {   
        return self::$motivo;
    }
    
    public static function alerta($idx, $temp, $umid, $amonia)
    {
        $motivo = "";
        if ($temp > Configtemp::getTempMax($idx))
        {
            $motivo .= "temp. alta | ";
        }
        else if ($temp < Configtemp::getTempMin($idx))
        {
            $motivo .= "temp. baixa | ";
        }
        
        if ($umid > Configumid::getUmidMax($idx))
        {
            $motivo .= "umid. alta | ";
        }
        else if ($umid < Configumid::getUmidMin($idx))
        {
            $motivo .= "umid. baixa | ";
        }
        
        if ($amonia > 25)
        {
            $motivo .= "acum. amonia | ";
        }
        
        if (!empty($motivo))
        {
            $motivo = substr($motivo, 0, strlen($motivo) - 2);
            self::$motivo = $motivo;
        }
        else 
        {
            self::$motivo = "";
        }
        
        return !empty($motivo) ? " style = 'color: red;' " : "";
    }
}