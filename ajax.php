<?php
include_once 'model/database.php';
include_once 'model/story.php';

$model_story = new Model_Story();
$act = $_POST['act'];

switch($act) {
    case "story_add":
        $model_story->addStory($_POST['story_title'], $_POST['story_description']);
        break;
}