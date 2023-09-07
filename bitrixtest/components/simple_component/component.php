<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use YourNamespace\Entity;

class SimpleComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        // Ваш код для получения данных из ORM сущности и настройки кеширования

        // Пример настройки кеширования (кэширование на один час)
        $cacheTime = 3600;
        $cacheID = 'my_cache_id';

        if ($this->StartResultCache($cacheTime, $cacheID)) {
            // Здесь ваш код для получения данных
            $arResult = [
                'RECORDS' => $records, // Здесь должны быть ваши записи из ORM
            ];

            $this->arResult = $arResult;
            $this->includeComponentTemplate();

            $this->EndResultCache();
        }
    }
}
