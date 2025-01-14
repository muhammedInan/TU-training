<?php

namespace Core\Component\ORM;

interface DatabaseStorageInterface
{
    public function connect();

    public function disconnect();

    public function prepare(string $sql, array $options);

    public function execute(array $parameters);

    public function fetch(int $fetchMode, int $cursorOrientation, int $cursorOffset);

    public function fetchAll(int $fetchMode);
}
