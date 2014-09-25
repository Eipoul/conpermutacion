<?php
function date_es($formato="F j, Y",$fecha=0) { 
    if (preg_match ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $fecha,$partes)) { 
        if (checkdate($partes[2],$partes[3],$partes[1])) { 
            $fecha=strtotime($fecha); 
        } else { 
            return(-1); 
        } 
    } elseif ($fecha==0) { 
        $fecha=time(); 
    } 
    $dias=array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"); 
    $dias_c=array("Dom","Lun","Mar","Mie","Jue","Vie","Sab"); 
    $meses=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
    $meses_c=array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"); 

    $valores=explode("|",date ("a|A|B|d|D|F|g|G|h|H|i|I|j|l|L|m|M|n|O|r|s|S|t|T|U|w|W|Y|y|z|Z",$fecha)); 
    $claves= array ("a","A","B","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"); 
    for ($i=0;$i<count($claves);$i++) { 
        $conv[$claves[$i]]=$valores[$i]; 
    } 
    $conv["D"]=$dias_c[$conv["w"]]; 
    $conv["l"]=$dias[$conv["w"]]; 
    $conv["F"]=$meses[$conv["n"]]; 
    $conv["M"]=$meses_c[$conv["n"]]; 
    $conv["r"]=$conv["D"].", ".$conv["d"]." ".$conv["M"]." ".$conv["Y"]." ".$conv["H"].":".$conv["i"].":".$conv["s"]." ".$conv["O"]; 
    $conv["S"]="o"; 
    $escape='\\\\\\'; 
    $escapado=0; 
    $f=$formato; 
    $res=""; 
    for ($t=0;$t<strlen($formato);$t++) { 
        if ($escapado==1) { 
            $res.=$f{$t}; 
            $escapado=0; 
        } else { 
            if($f{$t}==$escape) { 
                $escapado=1; 
            } else { 
                if (isset($conv[$f[$t]])){ 
                    $res.=$conv[$f[$t]]; 
                } else { 
                    $res.=$f{$t}; 
                } 
            } 
        } 
    } 
    return $res; 
}
?>