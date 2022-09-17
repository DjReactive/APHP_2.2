<?php
namespace Class;

abstract class Worker
{
    protected string $name;
    protected string $surname;
    public function __construct (string $name, string $surname) {
        $this->name = $name;
        $this->surname = $surname;
        $this->info();
    }
    public function basicInfo (string $workName, int $salary, int $access): void {
        echo "[$this->name $this->surname]" . PHP_EOL;
        echo "Должность: $workName" . PHP_EOL;
        echo "Зарплата: $salary parrots." . PHP_EOL;
        echo "Уровень доступа: $access" . PHP_EOL;
    }
    abstract public function info(): void;
}