<?php
declare(strict_types=1);

use app\components\db\Connection;

return [
    'class' => Connection::class,
    'dsn' => 'pgsql:host=localhost;port=5432;dbname={{ db_database }}',
    'username' => '{{ db_user }}',
    'password' => '{{ db_pass }}',
    'charset' => 'UTF-8',
    'enableSchemaCache' => true,
    'schemaCache' => 'schemaCache',
];