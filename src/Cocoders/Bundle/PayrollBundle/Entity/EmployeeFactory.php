<?php

namespace Cocoders\Bundle\PayrollBundle\Entity;

use Entity\Employee\EmployeeFactory as BaseFactory;

class EmployeeFactory implements BaseFactory
{
    public function create($id, $name, $address)
    {
        return new Employee($id, $name, $address);
    }
}
