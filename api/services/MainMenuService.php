<?php

/**
 * Created by PhpStorm.
 * User: Kot074
 * Date: 21.11.2018
 * Time: 22:43
 */
include_once dirname(__FILE__).'/../models/MenuItemModel.php';

class MainMenuService
{
    public static function loadMainMenu($path)
    {
        $json = file_get_contents($path);
        $content = json_decode($json, true);

        $result = array();

        foreach ($content["data"] as $arr) {
            $item = new MenuItemModel();
            $item->setId($arr["id"]);
            $item->setName($arr["name"]);
            $item->setMethod($arr["method"]);

            array_push($result, $item->toAssocArray());
        }

        return json_encode($result);
    }
}