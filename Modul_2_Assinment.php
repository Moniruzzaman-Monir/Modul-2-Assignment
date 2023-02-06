<?php

$tuition_Fee = 20000;

$commission = 
($tuition_Fee >= 20000) ? ($tuition_Fee * .25):
(($tuition_Fee >= 1000) ? ($tuition_Fee * 0.20):
(($tuition_Fee >= 7000) ? ($tuition_Fee * 0.15):
"invalid"));

echo "Your Commission is: $commission";
