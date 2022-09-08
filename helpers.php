<?php
function getjsonData()
{
    $tasks = [];
    if (file_exists('tasks.json')) {
        $tasks = json_decode(file_get_contents('tasks.json'), true);
    }
    return $tasks;
}
function setJsonData($tasks)
{
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
}
