<?php
include_once 'include_files.php';

$model_story = new Model_Story();
$act = $_POST['act'];

switch($act) {
    case "story_add":
        $model_story->addStory($_POST['story_title'], $_POST['story_description']);
        break;
    default:
        break;
}