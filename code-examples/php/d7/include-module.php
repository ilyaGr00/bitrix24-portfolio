<?php

declare(strict_types=1);

use Bitrix\Main\Loader;

if (!Loader::includeModule('crm'))
{
    throw new RuntimeException('Модуль CRM не установлен или недоступен');
}
