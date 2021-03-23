<?php

$zpravaLazizbekAmrillaev="Běžel jsem na zastavku abych stihl přijít v čas na trénink basketu a najednou vidim jak mi ujíždí autobus";

$slovaLazizbekAmrillaev=array('autobusu','basketu','trénink');
/** 
 * @param string $zpravaLazizbekAmrillaev
 * @param array $slovaLazizbekAmrillaev
 * @return string
*/
echo isValidLazizbekAmrillaev($zpravaLazizbekAmrillaev,$slovaLazizbekAmrillaev);
 
function isValidLazizbekAmrillaev(string $zpravaLazizbekAmrillaev,array $slovaLazizbekAmrillaev): ?string
{
foreach($slovaLazizbekAmrillaev as $valueLazizbekAmrillaev){

if(strpos($zpravaLazizbekAmrillaev,$valueLazizbekAmrillaev)){
    return " Slovo ".$valueLazizbekAmrillaev." je nedostupne! ";
    
}
strpos($zpravaLazizbekAmrillaev,$valueLazizbekAmrillaev);
    
}

return "Slovo nebylo nalezeno";
}
?>