<?php

namespace Class;
use Interface\ApplicationCreatorInterface;

class Tester extends Worker implements ApplicationCreatorInterface
{
    protected string $workName = "Менеджер";
    public int $access = 2;
    public int $salary = 16;
    public function info (): void {
        $this->basicInfo($this->workName, $this->salary, $this->access);
        echo $this->creating ("проведение отладки и выявление проблем в коде");
    }
    public function creating (?string $desc = "---"): string {
        return "Занимается разработкой: $desc" . PHP_EOL;
    }
}