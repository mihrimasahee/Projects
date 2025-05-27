<?php
require_once '../../app/Classes/VehicleManager.php';

$newVehicle= [
    'name' => 'Tata Nano',
    'type' => 'MINI',
    'price' => 5548222,
    'image' => 'TATA PIC'
];


$vehicleManager = new VehicleManager('','','','');
$vehicleManager->addVehicle($newVehicle);

echo "Added Successfully!";

?>