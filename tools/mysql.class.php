<?php


class mysql

{
	
function update_areavalue($table,$area,$value){
	
$sql = "delete from $table, where area = '$area'"; 

mysql_query($sql);
 

$sql ="insert into $table (`area`,`areavalue`)value('$area','$value')";
 
mysql_query($sql);


	
	
}



function get_areavalue($table,$area){
	
	$sql  = "select areavalue from $table where area = '$area'";
	
	$arr = $this->mysql_fetch_array_total($sql); 
	if(!empty($arr)){
	return $arr[0]['areavalue'];

}

return null;

}

function insert_column($table_name,$row,$ignore=array()){
	
$column_name = '(';
$values = ')values(';
foreach($row as $k => $v){
	
	if(in_array($k,$ignore)){continue;}
	
	$column_name .="$k,";
	$values .= "'$v',";
}
$column_name =chop($column_name,',');

$values = chop($values,',');
$values .=')';

echo $sql = "insert into $table_name $column_name $values\n";

save_log('repeatjob.txt',$sql);


mysql_query($sql);

}

function mysql_fetch_array_total($sql,$comment=false){


$sth = mysql_query($sql);

$i= 0;

$row = array();

while($r = mysql_fetch_assoc($sth)){

$i++;

if($i == 1 && $comment == true){

$w1 = 'from ';
$w2 = ' ';
$sql = str_replace(' FROM ',' from ',$sql);

$sql = str_replace('`','',$sql);

$table_name = $this->get_str($sql,$w1,$w2);

foreach($r as $k => $v){
	
$sql1 = "select column_comment from information_schema.columns where table_name = '$table_name' and COLUMN_NAME = '$k'\n";
	
	$sth1 = mysql_query($sql1);
	$rr = mysql_fetch_assoc($sth1);
	
	if(!empty($rr['column_comment'])){
	
	$tmp[$k] = $rr['column_comment'];
	
}
else{
	$tmp[$k] = $k;
}

}

$row[] = $tmp;

}

$row[] = $r;

}
	
return $row;

}

function print_form($url){
	
	echo "<form method=post action=$url>\n";
}

function print_form_data($url){
	
	echo "<form method=\"post\" action=\"$url\" enctype=\"multipart/form-data\">\n";
}

function print_area($name,$rows,$cols,$txt=false,$note='',$note2=''){
	

	echo "$note2<textarea name=$name rows=$rows cols=$cols>$txt</textarea>$note<br>\n";
}

function print_submit($name,$value,$endf=true){
	
	
	echo "<input type=submit name=$name value=$value><br><br>
	";
	if($endf){
	echo"</form>
	";
}
}
function print_text($name,$value,$note,$size=''){
	if(!empty($size)){$size = "size=$size";}
	echo "$note:<input $size type=text name=$name value=$value>
	";
}

function print_upfile($name,$note){
	
	echo "$note: <input type=\"file\" name=\"upfile\">";
}



function print_pwd($name,$value,$note){
	echo "$note:<input type=password name=$name value=$value>
	";
}
function print_checkbox($name,$value,$note){
	echo "$note:<input type=checkbox name=$name value=$value>
	";
}

function print_text_hidden($name,$value){
	echo "<input type=hidden name=$name value=$value>
	";
}

function str_check($str,$nomysql=false){

$str = str_replace(" ",'',$str);
$str = str_replace("\r",'',$str);
$str = str_replace("'",'',$str);
$str = str_replace("\"",' ',$str);
$str = str_replace('\\','|',$str);

if($nomysql === false){
$str = mysql_real_escape_string($str);
}

return $str;	

}


function REFRESH($url=null,$t=1){

if(!$url){

$url=$this->url;
}

echo "<meta HTTP-EQUIV=REFRESH CONTENT=$t;URL=$url>";

exit;	
	
}	 	

}


?>