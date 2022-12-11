<?php
use Carbon\Carbon;

function LeftDays($date_accept, $addDate) {
	$date = Carbon::parse($date_accept);
    $daysToAdd = $addDate;
    $date = $date->addDays($daysToAdd);
    return $date->diffForHumans();
}