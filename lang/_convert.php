<?php

include_once('_php_mo.php');


$files = scandir('./po');

//scan through templates directory and pull in name paths
foreach ($files as $name) {
    if ($name === '.' or $name === '..' or $name === '__MACOSX') continue;

    if ($name=='en') {
        continue;
    }
    
    if (strstr($name,'.po')) {
        $base = trim(str_replace('.po' , '' , $name));
        
        phpmo_convert( './po/'.$name,  './mo/'.$base.'.mo' );
        
        if (filesize('./mo/'.$base.'.mo') < 105 * 1024 ) {    
            //unlink('./mo/'.$base.'.mo');
        }
        
        echo $base.'.mo';
        echo "\r\n";
        echo "<br>";
    }
}
