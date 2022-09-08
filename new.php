<?php
require_once 'helpers.php';

$taskName = $_POST['task'] ?? false;
$taskName = trim($taskName);
if ($taskName) {
    $tasks = getjsonData();
    $tasks[$taskName]['completed'] = false;
    setJsonData($tasks);
}
header("Location: index.php");
