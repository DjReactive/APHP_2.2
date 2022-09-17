<?php
namespace Class;
use Interface\ApplicationCreatorInterface;
use Interface\WebinarSpeakerInterface;

class Programmer extends Worker implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    protected string $workName = "Программист";
    public int $access = 4;
    public int $salary = 20;
    public function info (): void {
        $this->basicInfo($this->workName, $this->salary, $this->access);
        echo $this->webinarTodo("На технические темы");
        echo $this->creating("Javascript, PHP");
    }
    public function webinarTodo (?string $desc = "---"): string {
        return "Проводит вебинары: $desc" . PHP_EOL;
    }
    public function creating (?string $desc = "---"): string {
        return "Занимается разработкой: $desc" . PHP_EOL;
    }
}