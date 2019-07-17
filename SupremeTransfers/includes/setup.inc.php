<?php
ob_start();
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Pragma: no-cache"); // HTTP/1.0
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
ini_set('max_execution_time', 10000);
error_reporting(E_ALL);
ini_set('display_errors', '0');

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
  $mobile=1;
} else {
  $mobile=0;
}

/* Funcion de Operaciones con Fechas */
   function dateadd($operacion, $date, $dd=0, $mm=0, $yy=0, $hh=0, $mn=0, $ss=0){ //Recibe el tipo de operación, la fecha, dias, meses, años, horas, minutos, segundos a sumar o restar.
   if($operacion=="resta"){
       $date_r = getdate(strtotime($date));
       $resultado = date("Y-m-d H:i:s", mktime(($date_r["hours"]-$hh),($date_r["minutes"]-$mn),($date_r["seconds"]-$ss),($date_r["mon"]-$mm),($date_r["mday"]-$dd),($date_r["year"]-$yy)));
       return $resultado; }
   else{
       $date_r = getdate(strtotime($date));
       $resultado = date("Y-m-d H:i:s", mktime(($date_r["hours"]+$hh),($date_r["minutes"]+$mn),($date_r["seconds"]+$ss),($date_r["mon"]+$mm),($date_r["mday"]+$dd),($date_r["year"]+$yy)));
       return $resultado; }
   }

//Funcion que Genera Slug
function gen_slug($str){
    # special accents
    $a = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','Ð','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','?','?','J','j','K','k','L','l','L','l','L','l','?','?','L','l','N','n','N','n','N','n','?','O','o','O','o','O','o','Œ','œ','R','r','R','r','R','r','S','s','S','s','S','s','Š','š','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Ÿ','Z','z','Z','z','Ž','ž','?','ƒ','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','?','?','?','?','?','?');
    $b = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','D','d','E','e','E','e','E','e','E','e','E','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','IJ','ij','J','j','K','k','L','l','L','l','L','l','L','l','l','l','N','n','N','n','N','n','n','O','o','O','o','O','o','OE','oe','R','r','R','r','R','r','S','s','S','s','S','s','S','s','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Y','Z','z','Z','z','Z','z','s','f','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','A','a','AE','ae','O','o');
    return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'),array('','-',''),str_replace($a,$b,$str)));
}

//Funcion que saca el directorio actual
function getCurrentDirectory() { $path = dirname($_SERVER['PHP_SELF']); $position = strrpos($path,'/') + 1; return substr($path,$position); }

/* Funcion Descripcion Corta */
function limit_text($string)
{
    $string = strip_tags($string);
    if (strlen($string) > 350) {
        // truncate string
        $stringCut = substr($string, 0, 350);
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
    }
    echo $string;
}

/* Funcion Descripcion Corta */
function limit_text_image($string, $return = false)
{
    $string = strip_tags($string);
    $string = utf8_encode($string);
    if (strlen($string) > 150) {
        // truncate string
        $stringCut = substr($string, 0, 150);
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
    }
    if(!$return){
        echo $string;
    }else{
        return $string;
    }
}


// Variables de Sesión
if(isset($_GET['lang'])) 
{
  $_SESSION['SITE_LANG']=$_GET['lang']; $lang=$_GET['lang']; 
  if($lang=="en") { $valor_id='1'; $currency="USD"; } 
  else { $valor_id='2'; $currency="MXN"; }
}
else
{
  if(!isset($_SESSION['SITE_LANG'])) 
  { 
      $_SESSION['SITE_LANG']="en"; $lang="en"; $valor_id='1'; $currency="USD"; 
  } 
  else 
  {
      switch($_SESSION['SITE_LANG'])
      {
          case 'en': $lang="en"; $valor_id='1'; $currency="USD"; break;
          case 'es': $lang="es"; $valor_id='2'; $currency="MXN"; break;
      }
  }
}

include('lang-'.$lang.'.inc.php');

$param_sql=mysqli_query($mysqli,"SELECT * FROM tm_parametros WHERE id='$valor_id'");
$row_param=mysqli_fetch_assoc($param_sql);
$tipoCambio=$row_param['tipo_cambio'];

$directorio=getCurrentDirectory();
$t_url= 'http://' . $_SERVER['HTTP_HOST'] .'/'. $directorio .'/';
$ruta=basename($_SERVER['SCRIPT_FILENAME']);
switch($ruta)
{
    case 'reservations.php': $jquery_file='https://code.jquery.com/jquery-2.1.4.min.js'; break;
    default: $jquery_file='https://code.jquery.com/jquery-3.2.1.min.js'; break;
}
?>
<?php ob_flush(); ?>
