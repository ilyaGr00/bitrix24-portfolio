<?php

declare(strict_types=1);

use Bitrix\Crm\Service\Container;
use Bitrix\Main\Loader;

if (!Loader::includeModule('crm'))
{
    throw new RuntimeException('Не удалось подключить модуль CRM');
}

$entityTypeId = 1000; // Замените на идентификатор нужного типа

$factory = Container::getInstance()->getFactory($entityTypeId);

if ($factory === null)
{
    throw new RuntimeException(
        sprintf('Factory для типа %d не найдена', $entityTypeId)
    );
}
