<?php

	$eurosCount = 100;
	$rublesPerDollar = 60;
	$dollarPerEuro = 1.25;
	$dollarCount = $eurosCount * $dollarPerEuro;
    $rublesCount = $dollarCount * $rublesPerDollar;
	print_r($dollarCount ."\n". $rublesCount);