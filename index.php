<?php

declare(strict_types=1);
include './autoloader.php';

use Class\Worker;
use Class\Tester;
use Class\Manager;
use Class\Programmer;
use Class\Director;

$count = 0;
$allSalary = 0;
$workers[] = new Tester('Ivan', 'Ivanov');
$workers[] = new Manager('Alexander', 'Alexandrov');
$workers[] = new Programmer('Petr', 'Peetrov');
$workers[] = new Director('Sergey', 'Sergeev');

foreach ($workers as $worker) {
    if ($worker instanceof Worker) {
        $count++;
        $allSalary += $worker->salary;
    }
}
echo "Общее кол-во сотрудников: $count" . PHP_EOL;
echo "Сумма всех зарплат составляет: $allSalary попугая(ев)" . PHP_EOL;
