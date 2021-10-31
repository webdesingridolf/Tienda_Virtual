<?php
  function base_url(){
    return BASE_URL;
 }
 function dep($data)
 {
    $format=print_r('<pre>');
    $format.=print_r($data);
    $format.=print_r('</pre>');
    return $format;
 }
 function strclean($strcadena)
 {
     $string=preg_replace(['/\s+/','/^\s|\s$/'],['',''],$strcadena);
     $string=trim($string);//elimina espacios en blanco al incio y al final
     $string=stripslashes($string);//elimina las \ invertidas
     $string=str_replace("<script>","",$string);
     $string=str_replace("</script>","",$string);
     $string=str_replace("<script src>","",$string);
     $string=str_replace("SELECT*FROM","",$string);
     $string=str_replace("DELETE FROM","",$string);
     $string=str_replace("INSERT INTO","",$string);
     $string=str_replace("SELECT COUNT(*) FROM","",$string);
     $string=str_replace("DROP TABLE","",$string);
     $string=str_replace("OR '1'='1'","",$string);
     $string=str_replace('OR"1"="1"',"",$string);
     $string=str_replace("is NULL; --","",$string);
     $string=str_replace("is NULL;--","",$string);
     $string=str_replace("LIKE '","",$string);
     $string=str_replace('LIKE"',"",$string);
     $string=str_replace("OR 'a'='a","",$string);
     $string=str_replace('OR "a"="a',"",$string);
     $string=str_replace("--","",$string);
     $string=str_replace("^","",$string);
     $string=str_replace("[","",$string);

     $string=str_replace("]","",$string);
     $string=str_replace("==","",$string);
    return $string;

 }
 function formatMoney($cantidad){
    $cantidad=number_format($cantidad,2,SPD,SPM);
    return $cantidad;
 }
 function media(){
    return BASE_URL."assets/";
 }
 function headerAdmin(){
    $viewHeader="Views/Template/Header_Admin.php";
    require_once($viewHeader);

 }
 function footerAdmin(){
   $viewFooter="Views/Template/Footer_Admin.php";
   require_once($viewFooter);

}
function navAdmin($data=""){
   $viewNav="Views/Template/Nav_Admin.php";
   require_once($viewNav);
}

?>