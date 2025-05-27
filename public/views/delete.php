<?php
    require_once '../../app/Classes/VehicleManager.php';


    $id =1;

    $vehicleManager= new VehicleManager('','','','');
    $vehicleManager->deleteVehicle($id);

    echo "Deleted successfully";

?>