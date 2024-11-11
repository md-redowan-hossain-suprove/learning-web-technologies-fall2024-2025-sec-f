<?php

$array = array( 1,2,3,4,5,6,7,8,9,10);
echo "Array are : (1,2,3,4,5,6,7,8,9,10) <br><br>" ;

$search = 7;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $search) 
    {  
        echo "Search Element is : $search <br><br> " ;
        echo "The Element is Found....." ;
        break;
        
    }
    
}
?>