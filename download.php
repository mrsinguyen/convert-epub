<?php
require_once __DIR__ . '/vendor/autoload.php';

use quanvm\convertepub\crawler\DownloadList;
use quanvm\convertepub\crawler\DownloadLogo;
use quanvm\convertepub\recipe\Bachngocsach;

$name = $argv[1];
$page = $argv[2] ?? 0;
$recipeName = $argv[3];
if ($recipeName == Bachngocsach::NAME) {
    $recipe = new Bachngocsach();
}
DownloadLogo::execute($name, $recipe);
DownloadList::execute($name, $page, $recipe);
