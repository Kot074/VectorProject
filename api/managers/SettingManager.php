<?php
    class SettingManager
    {
        private static $timezone = "Europe/Moscow";

        public static function getTimeZone() {
            return SettingManager::$timezone;
        }
    }
?>