<pre>
Find words in files
<hr>
<?php

$path =dirname(__FILE__);

require "$path"."/mysql.class.php";

require "$path"."/File_Operate.class.php";


$m = new mysql;

$url ='find.php';

if(empty($_REQUEST['TEXT1']) && empty($_REQUEST['PATH'])){
$m->print_form($url);

$m->print_text('PATH','',$note2='PATH');

echo "\n";

$m->print_area('TEXT1',10,40,'',$note='keywords',$note2='');

echo "File type:<select name=type>
<option value='txt'> txt </option>
<option value='html'> html </option>
<option value='html'> htm </option>
<option value='php'> php </option>
<option value='tpl'> tpl </option>
</select>\n\n";

$m->print_submit('Submit','Submit');

exit;

}

$type[0]=$_REQUEST['type'];

$f=new File_Operate;

#$_REQUEST['TEXT1'] = $f->str_check($_REQUEST['TEXT1']);

$domains = explode("\n",$_REQUEST['TEXT1']);

#$_REQUEST['PATH'] = iconv('UTF-8', 'GBK//IGNORE',$_REQUEST['PATH']);

$files = $f->ReadFileFromDir($_REQUEST['PATH'],$type);

$check_exists = array();

$exists=array();
$domains1=array();

foreach($domains as $v){
	
$domains1[$v] = $v;	
	
}

if(!is_array($files)){echo "目录不存在或不可写";exit;}


foreach($files as $file){
	
	if($r = is_infile($domains,$file)){
	#print_r($r);exit;
		
	$exists[] =$r;
	
	print_lines($r);
	
	
}

}



if(empty($exists)){
echo "<hr>{$_REQUEST['TEXT1']} <font color=blue>Not Found</font><br>";
}

exit;


function is_infile($domains,$file){
	
$rerurn = array();


$undef=explode('.',$file);


$ex = strtolower(array_pop($undef));

#echo "$ex<br>";



	$c = file_get_contents($file);
	
	
	foreach($domains as $d){
		
		if(stripos($c,$d) !==false){
		
		list($undef,$undef1)=explode($d,$c);
			
			$this_line = substr_count($undef,"\n")+1;
			
			$rerurn[$d][]='in '.$file . ' line <font color=blue>' . $this_line.'</font>';
		}
		
	}
	
	return $rerurn;
	
}

function print_lines($r){
	
foreach($r as $key => $value){

foreach($value as $k=> $v){
		
		$key = chop($key,"\r");
		
		echo "Found<font color=green> $key</font> $v\n";
		
	}	
}

flush_browser();

}

function flush_browser(){

//echo str_repeat(" ",4096);

ob_start(); //打开输出缓冲区 
ob_end_flush(); 
ob_implicit_flush(1); //立即输出

ob_flush();
flush();  

}