<?php
namespace Class;
use Interface\LeadInterface;

class Director extends Worker implements LeadInterface
{
    protected string $workName = "Директор";
    public int $access = 5;
    public int $salary = 25;
    public function info (): void {
        $this->basicInfo($this->workName, $this->salary, $this->access);
        $this->leadTodo("Является директором");
    }
    public function leadTodo(string $desc): void
    {
        echo "Руководящая деятельность: $desc" . PHP_EOL;
    }
}