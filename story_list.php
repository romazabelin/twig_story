<?php
include_once 'include_files.php';
include_once 'config.php';

$page = ($_GET['page']) ? (int)$_GET['page'] : 1;
$flagIsNumber = is_int($page);
$count_item_page = 2;
$from = ($page) ? ($page - 1) * $count_item_page : 0;
$list_stories = ($flagIsNumber) ? Model_Database::getListStories($from, $count_item_page) : array();
$total_count_page = ceil(count(Model_Database::getListStories()) / $count_item_page);

$template = $twig->loadTemplate('story_list.tmpl');

echo $template->render(array(
    "list_stories" => $list_stories,
    "total_count_page" => $total_count_page,
    "page" => $page
));
?>
