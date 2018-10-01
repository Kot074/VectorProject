<?php
    include_once "models/NewsModel.php";
    include_once "managers/SettingManager.php";

    date_default_timezone_set(SettingManager::getTimeZone());

    $myTitle = "My test title for news";
    $myBody = "My test body for news";

    $news = new NewsModel($myTitle, $myBody);

    echo $news->getId()."\n";
    echo $news->getTitle()."\n";
    echo $news->getBody()."\n";
    echo $news->getDate()."\n";
    print_r($news->toArray());
?>