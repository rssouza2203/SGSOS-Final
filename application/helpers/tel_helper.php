<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('formata_tel'))
{
function formata_tel($numero){

     
          $numero = preg_replace("[' '-./ t]", '', $numero);
          $valor  = str_pad(preg_replace('[^0-9]', '', $numero), 11, '0', STR_PAD_LEFT);
          return preg_replace('/^(\d{2})(\d{5})(\d{4})$/', '($1) $2-$3', $valor);
  

}
}
