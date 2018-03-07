<?php

class File_Operate
{

function Del_Dir_tree($path){


echo "清除 $path ...";

	$dirhandle = opendir("$path");

 $DirFiles = array();

while($file = readdir($dirhandle)){
 
 if($file =='.'){continue;}
 if($file =='..'){continue;}
if(is_dir($file)){continue;}
 
  $DirFiles[]=$file;

}

closedir($dirhandle);

#print_r($DirFiles);

foreach($DirFiles as $k=> $v){
	
unlink ("$path/$v");

}


rmdir($path);

}	
function ReadFileFromDir($dir,$type=array()) {
    
    $file_array=array();
   #echo $dir;
    if (!is_dir($dir)) {
        return false;
    }
  
    $handle = opendir($dir);
    while (($file = readdir($handle)) !== false) {
       
        if ($file == "." || $file == "..") {
            continue;
        }
        
      $file = "$dir/$file";
       
        if (is_file($file)) {
        
        	 if(!empty($type)){
         
          $ftpyes =explode('.',$file);
          	
        	$ftype = end($ftpyes);
        	if(!in_array($ftype,$type)){continue;}
        	
        }
        
           $file_array[] = $file;
         //echo "数据文件：$file\n";
        } elseif (is_dir($file)) {
           $file_array = array_merge($file_array,$this->ReadFileFromDir($file,$type));
        }
    }
    
return $file_array;     
}

/**
 * 取文件最后$n行
 * @param string $filename 文件路径
 * @param int $n 最后几行
 * @return mixed false表示有错误，成功则返回字符串
 */
function FileLastLines($filename,$n,$mode=0){
   
      
   $fsize = filesize($filename);
   
   if($fsize < 10240){
   	
   	
$c = file_get_contents($filename); 
   
  if($mode == 1){
   
  $cs = explode("\n",$c);
 
   krsort($cs);

 
   return implode("\n",$cs);
  	
  }
  else{
   
   return $c;	
  	
  }
  
 }

    if(!$fp=fopen($filename,'r')){
      //  echo "打开文件失败，请检查文件路径是否正确，路径和文件名不要包含中文";
        return false;
    }
    $pos=-2;
    $eof="";
    $str="";
    while($n > 0){
        while($eof!="\n"){
            if(!fseek($fp,$pos,SEEK_END)){
                $eof=fgetc($fp);
                $pos--;
            }else{
                break;
            }
        }
        //-----------------------------判断正反排序
        if($mode == 1){
        $str = $str . fgets($fp);
        
      }
      else{
      $str = fgets($fp).$str;
      }
      
        $eof="";
        $n--;
    }
    
    return $str;
}

function file_mode_info($file_path)
{
    /* 如果不存在，则不可读、不可写、不可改 */
    if (!file_exists($file_path))
    {
        return false;
    }
    $mark = 0;
    if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')
    {
        /* 测试文件 */
        $test_file = $file_path . '/cf_test.txt';
        /* 如果是目录 */
        if (is_dir($file_path))
        {
            /* 检查目录是否可读 */
            $dir = @opendir($file_path);
            if ($dir === false)
            {
                return $mark; //如果目录打开失败，直接返回目录不可修改、不可写、不可读
            }
            if (@readdir($dir))
            {
                $mark ^= 1; //目录可读 001，目录不可读 000
            }
            @closedir($dir);
            /* 检查目录是否可写 */
            $fp = @fopen($test_file, 'wb');
            if ($fp === false)
            {
                return $mark; //如果目录中的文件创建失败，返回不可写。
            }
            if (@fwrite($fp, 'directory access testing.') !== false)
            {
                $mark ^= 2; //目录可写可读011，目录可写不可读 010
            }
            @fclose($fp);
            @unlink($test_file);
            /* 检查目录是否可修改 */
            $fp = @fopen($test_file, 'ab+');
            if ($fp === false)
            {
                return $mark;
            }
            if (@fwrite($fp, "modify test.\r\n") !== false)
            {
                $mark ^= 4;
            }
            @fclose($fp);
            /* 检查目录下是否有执行rename()函数的权限 */
            if (@rename($test_file, $test_file) !== false)
            {
                $mark ^= 8;
            }
            @unlink($test_file);
        }
        /* 如果是文件 */
        elseif (is_file($file_path))
        {
            /* 以读方式打开 */
            $fp = @fopen($file_path, 'rb');
            if ($fp)
            {
                $mark ^= 1; //可读 001
            }
            @fclose($fp);
            /* 试着修改文件 */
            $fp = @fopen($file_path, 'ab+');
            if ($fp && @fwrite($fp, '') !== false)
            {
                $mark ^= 6; //可修改可写可读 111，不可修改可写可读011...
            }
            @fclose($fp);
            /* 检查目录下是否有执行rename()函数的权限 */
            if (@rename($test_file, $test_file) !== false)
            {
                $mark ^= 8;
            }
        }
    }
    else
    {
        if (@is_readable($file_path))
        {
            $mark ^= 1;
        }
        if (@is_writable($file_path))
        {
            $mark ^= 14;
        }
    }
    return $mark;
}


function str_check($str){

$str = str_replace(" ",'',$str);
$str = str_replace("\r",'',$str);
$str = str_replace("'",'',$str);
$str = str_replace("\"",'',$str);
return $str;	

}	

}


?>