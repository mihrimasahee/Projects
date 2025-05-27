<?php
    require_once '../../app/Classes/VehicleManager.php';


    $id =2;
    $updatedVehicle=[
    'name'=> 'Tesla',
    'type'=> 'Electric',
    'price'=> '839487953',
    'image'=> 'adflkdf ksdjl'
    ];

    $vehicleManager= new VehicleManager('','','','');
    $vehicleManager->editVehicle($id,$updatedVehicle);

    echo "Updated successfully";

?>