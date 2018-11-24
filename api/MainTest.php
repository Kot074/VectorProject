<?php
    include_once "models/NewsModel.php";
    include_once "managers/SettingManager.php";
    include_once "services/MainMenuService.php";

    date_default_timezone_set(SettingManager::getTimeZone());
    $file_name = "resources/mainMenuItems.json";

    echo MainMenuService::loadMainMenu($file_name);