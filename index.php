<?php
include_once 'include_files.php';
include_once 'config.php';

$template = $twig->loadTemplate('index.tmpl');

echo $template->render(array(
));
?>
