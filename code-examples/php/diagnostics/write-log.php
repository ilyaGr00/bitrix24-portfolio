<?php

declare(strict_types=1);

/**
 * Простой пример записи диагностического сообщения в файл.
 *
 * Перед использованием убедитесь, что каталог существует
 * и доступен на запись пользователю веб-сервера.
 */

$message = sprintf(
    "[%s] %s%s",
    date('Y-m-d H:i:s'),
    'Diagnostic message',
    PHP_EOL
);

$logFile = $_SERVER['DOCUMENT_ROOT'] . '/local/logs/example.log';

if (file_put_contents($logFile, $message, FILE_APPEND | LOCK_EX) === false)
{
    throw new RuntimeException('Не удалось записать диагностический журнал');
}
