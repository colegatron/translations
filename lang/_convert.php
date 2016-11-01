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
        
        if (filesize('./po/'.$name) < 455228) {
            continue;
        }
        
        $base = trim(str_replace('.po' , '' , $name));
        phpmo_convert( './po/'.$name,  './mo/'.$base.'.mo' );
        
        echo $base.'.mo';
        echo "\r\n";
        echo "<br>";
    }
}
