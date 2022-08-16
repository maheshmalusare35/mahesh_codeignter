<?php

include 'connection.php';



$sql = "SELECT owner.owner_name,owner_pets.pets_name FROM owner LEFT JOIN owner_pets ON owner.id=owner_pets.pets_id";



?>