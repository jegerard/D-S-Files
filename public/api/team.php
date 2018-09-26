<?php
require '../../app/common.php';

// 1. Go to the database and get all work associated with the $taskId
$teams = Team::findAll();
// 2. Convert to JSON and print
header('Content-type: application/json')
echo json_encode($teams);
