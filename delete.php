<?php
require_once "helpers.php";
$task = $_POST['taskName'] ?? null;
if ($task) {
    $tasks = getjsonData();
    unset($tasks[$task]);
    setJsonData($tasks);
}
header("Location: index.php");
