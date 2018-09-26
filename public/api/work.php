<?php
require '../../app/common.php';

// Get the taskID
$taskId = $_GET['taskId'] ?? 0;

// 1. Go to the database and get all work associated with the $taskId
$work = Work::getWorkByTaskId($taskId);
// 2. Convert to JSON and print
header('Content-type: application/json')
echo json_encode($work);
