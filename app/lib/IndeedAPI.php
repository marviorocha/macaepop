<?php
class IndeedAPI {
 
public static function publish(){
$pub     = '1719454190046839';
$q       = "Brasil";
$l       = "Macaé";
$sort    = "";
$radius  = "";
$st      = "";
$jt      = "";
$start   = "";
$filter  = "";
$fromage = "";
$limit   = "15";
$chnl    = "";
$ip      = $_SERVER['REMOTE_ADDR'];
$agent   = $_SERVER['HTTP_USER_AGENT'];
$url     = "http://api.indeed.com/ads/apisearch?publisher=$pub&q=$q&l=$l&sort=$sort&radius=$radius&st=$st&jt=$jt&start=$start&limit=$limit&fromage=$fromage&filter=$filter&latlong=1&co=br&chnl=$chnl&userip=$ip&useragent=$agent&v=2";
$xml     =simplexml_load_file($url);
return $xml;

}
 
public static function search(){

$pub     = '1719454190046839';
$q       = Input::get('busca');
$l       = "Macaé";
$sort    = "";
$radius  = "";
$st      = "";
$jt      = "";
$start   = "";
$filter  = "";
$fromage = "";
$limit   = "";
$chnl    = "";
$ip      = $_SERVER['REMOTE_ADDR'];
$agent   = $_SERVER['HTTP_USER_AGENT'];
$url     = "http://api.indeed.com/ads/apisearch?publisher=$pub&q=$q&l=$l&sort=$sort&radius=$radius&st=$st&jt=$jt&start=$start&limit=$limit&fromage=$fromage&filter=$filter&latlong=1&co=br&chnl=$chnl&userip=$ip&useragent=$agent&v=2";
$xml     = simplexml_load_file($url);
return $xml;
}

 
public static function pesquisar(){

 
$pub     = '1719454190046839';
$q       = Session::get('pesquisar');
$l       = "Macaé";
$sort    = "";
$radius  = "";
$st      = "";
$jt      = "";
$start   = "";
$filter  = "";
$fromage = "";
$limit   = "15";
$chnl    = "";
$ip      = $_SERVER['REMOTE_ADDR'];
$agent   = $_SERVER['HTTP_USER_AGENT'];
$url     = "http://api.indeed.com/ads/apisearch?publisher=$pub&q=$q&l=$l&sort=$sort&radius=$radius&st=$st&jt=$jt&start=$start&limit=$limit&fromage=$fromage&filter=$filter&latlong=1&co=br&chnl=$chnl&userip=$ip&useragent=$agent&v=2";
$xml     = simplexml_load_file($url);
return $xml;
}




}


?>