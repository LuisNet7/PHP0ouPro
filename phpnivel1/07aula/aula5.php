<?php
$data = new DateTime();


$data->setTimezone(new DateTimeZone('America/Sao_Paulo'));

echo $data->format('d/m/y H:i:s')."<br>";

/*
$data2 = new DateTime('20-01-01 15:35:00');

//$date2->add(DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds'));
$date2->sub(DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds'));


echo $data2->format('d/m/Y H:i:s');
*/

$date2 = new DateTime('2000-12-31');
$interval = new DateInterval('P1M');

$date2->add($interval);
echo $date2->format('Y-m-d') . "\n";

echo "<br>";

$date2->add($interval);
echo $date2->format('Y-m-d') . "\n";

echo "<br>";
echo "<br>";

$date3 = date_create('2020-04-14');
date_sub($date3, date_interval_create_from_date_string('10 days'));
echo date_format($date3, 'd-m-Y');


echo "<br>";
echo "<br>";

$date4 = new DateTime();
 $date4->getTimestamp();
echo $date4->format('Y-m-d H:i:s');

echo "<br>";
echo "<br>";

$today = new DateTime();
$end = new DateTime('2020-12-31');

$diff = $today->diff($end);
echo $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');


































