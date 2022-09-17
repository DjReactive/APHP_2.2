<?php
namespace Class;
use Interface\WebinarSpeakerInterface;

class Manager extends Worker implements WebinarSpeakerInterface
{
    protected string $workName = "Менеджер";
    public int $access = 3;
    public int $salary = 14;
    public function info (): void {
        $this->basicInfo($this->workName, $this->salary, $this->access);
        echo $this->webinarTodo("На различные темы");
    }
    public function webinarTodo (?string $desc = "---"): string
    {
        return "Проводит вебинары: $desc" . PHP_EOL;
    }
}