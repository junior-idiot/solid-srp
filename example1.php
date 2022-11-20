<?php
//example1.php
require "vendor/autoload.php";

//НЕЙМСПЕЙСЫ я оставил специально, что бы видеть, где плохой пример, а где хороший

const SCOOTER_ID = 1;
const CLIENT_NAME = "John Doe";

//BAD EXAMPLE
print "BAD EXAMPLE EXAMPLE:".PHP_EOL;
$badRentService = new \App\WithoutSRP\Kicksharing\RentElectricScooter();
$badScooter = $badRentService->findScooter(SCOOTER_ID);
$badOrder = $badRentService->orderScooter($badScooter, CLIENT_NAME);

echo $badRentService->printOrder($badOrder);

//GOOD EXAMPLE
print "GOOD EXAMPLE:".PHP_EOL;
$rentService = new \App\WithSRP\Kicksharing\RentElectricScooter();
$finService = new \App\WithSRP\Kicksharing\Services\FindService();
$printService = new \App\WithSRP\Kicksharing\Services\PrinterService();

$scooter = $finService->findScooter(SCOOTER_ID);

$order = $rentService->orderScooter($scooter, CLIENT_NAME);
echo $printService->printOrder($order);