<?php
require_once 'helpers.php';
$task = $_POST['taskName'] ?? null;
$tasks = getjsonData();

if ($task) {
    $tasks[$task]['completed'] = !$tasks[$task]['completed'];
    setJsonData($tasks);
}
header("Location: index.php");
