<?php


include('connect_db.php');


if (isset($_POST['get_option'])) {

$idCliente=$_POST['get_option'];

echo "Tratando de entrar con tipo clientes" ;

echo "Cliente: " + $idCliente;

$query = "SELECT cliente.idCliente, person.email1, concat('#',person.cedula,': ', person.name,' ',person.lastname, '#',person.cedula) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id where person.id=$idCliente order by person.name";
$find = mysqli_query($link,$query);


                while ($row = mysqli_fetch_array($find)) {

                   
?>

<?php
if(strlen($row['email1'] > 0))
 echo $query;
{ ?>
    <div class="form-group">
        <label class="col-sm-4 control-label" for="email">Email</label>
        <div class="col-sm-8">
            <input class="form-control" name="email" id="email" value="<?php echo $row['email1']; ?>">
            <input type="hidden" name="email1" value="<?php echo $row['email1']; ?>">
        </div>
    </div>
<?php } ?>
                               


                                <?php
                }
                
               
}





?>
