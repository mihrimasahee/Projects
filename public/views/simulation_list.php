<?php
        require_once '../../app/Classes/VehicleManager.php';


        $vehicleManager =new VehicleManager('','','','');
        $vehicles = $vehicleManager->getVehicle();

        echo "Vehicle List:<br><br><br>";

        foreach($vehicles as $index=>$vehicle){
        echo "ID: $index<br>";
        echo "Name: ".$vehicle['name']."<br>";
        echo "Type: ".$vehicle['type']."<br>";
        echo "Price: ".$vehicle['price']."<br>";
        echo "Image: ".$vehicle['image']."<br>";
        echo "+++++++++++++++++++++++<br>";

}

?>