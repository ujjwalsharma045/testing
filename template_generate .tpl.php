<?php 
    $header = "First Name,Last Name,DOB,Address,City,State,Country\n";
    echo $header;
    foreach($this->datas as $key => $val):
        echo implode(",",$val); 
    endforeach;
        
?>
