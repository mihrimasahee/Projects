<?php
require_once '../../app/Classes/VehicleManager.php';

$newVehicle= [
    'name' => 'BMW',
    'type' => 'Musele',
    'price' => 790980,
    'image' => 'hppsdf ddd'
];


$vehicleManager = new VehicleManager('','','','');
$vehicleManager->addVehicle($newVehicle);

echo "Added Successfully!";

?>