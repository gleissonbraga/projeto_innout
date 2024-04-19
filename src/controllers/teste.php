<?php 

// controler temporário


loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));

echo '<br>';
