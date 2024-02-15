<?php
 $server='localhost';
 $user= 'root';
 $password ='';
 $db ='fram contactcase';

 $con =mysql_connect($server, $user, $password, $db);
 if($con){
 	?>
 	<script>
 		alert("connection successful");
 	</script>
 	<?php
 }else{
 	<script>
 		alert("Noconnection ");
 	</script>
 	<?php

 }

?>