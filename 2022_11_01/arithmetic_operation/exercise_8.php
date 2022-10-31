<?php
function createEmployee($name, $base_pay, $hours_worked)
{
    $employee = new stdClass();
    $employee->name = $name;
    $employee->base_pay = $base_pay;
    $employee->hours_worked = $hours_worked;
    return $employee;
}

$employee_db = [
    createEmployee("1", 7.50, 35),
    createEmployee("2", 8.20, 47),
    createEmployee("3", 10, 73)
];

for ($i = 0; $i < count($employee_db); $i++) {
    if ($employee_db[$i]->base_pay < 8 || $employee_db[$i]->hours_worked > 60) {
        echo "error" . PHP_EOL;
    } else {
        if ($employee_db[$i]->hours_worked <= 40) {
            $payment_one = $employee_db[$i]->hours_worked * $employee_db[$i]->base_pay;
            echo $payment_one . PHP_EOL;
        } else {
            $extra_hours = $employee_db[$i]->hours_worked - 40;
            $extra_pay = $employee_db[$i]->base_pay * 1.5;
            $extra_payment = $extra_hours * $extra_pay;
            $payment_two = (40 * $employee_db[$i]->base_pay) + $extra_payment;
            echo $payment_two . PHP_EOL;
        }
    }
}