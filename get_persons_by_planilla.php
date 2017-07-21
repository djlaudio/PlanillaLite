<?php

include "db.php";
include "queries.php"

$db=connect();

$query=$db->query("select cliente.idCliente, cliente.idPersona, concat(rtrim(person.name),' ',rtrim(person.lastname), '#',person.cedula) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id where idPlanilla=$_GET[planilla_id]");

$persons = array();

while($r=$query->fetch_object()){ $persons[]=$r; }

if(count($persons)>0){

print "<option value=''>-- SELECCIONE --</option>";

foreach ($persons as $s) {

	print "<option value='$s->id'>$s->name</option>";

}

}else{

print "<option value=''>-- NO HAY DATOS --</option>";

}

?>