<?php
declare(strict_types=1);

interface DataSaver
{
    public function save(string $query);

    public function generateQuery(array $params);

    public function loadConfig(string $path);
}