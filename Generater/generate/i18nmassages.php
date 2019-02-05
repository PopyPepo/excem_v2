<?php
function i18nmassages($conn, $tableIns, $fileIns){
    $c= "";
    $th = '"Th": {';
    $en = '"En": {';
    $table = $tableIns['TABLE_NAME'];
    $sql = "SHOW FULL COLUMNS FROM ".$table." WHERE Extra!='auto_increment' ";
	$excute = mysqli_query($conn, $sql);
	while ($instanc = mysqli_fetch_object($excute)){
        $label = $instanc->Comment ? $instanc->Comment : $instanc->Field;
        $th .= $c.'
        "'.$instanc->Field.'": "'.$label.'"';
        $en .= $c.'
        "'.$instanc->Field.'": "'.$instanc->Field.'"';
        $c = ",";
    }

    $th .= '
    },';
    $en .= '
    }';

    $txt = '{'.$th.$en.'
}';
    return $txt;
}
?>