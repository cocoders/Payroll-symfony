<?php

namespace Cocoders\Bundle\PayrollBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Entity\Employee\Employee;

class EmployeeRepository extends EntityRepository implements \Repositories\EmployeeRepository
{
    public function add(Employee $employee)
    {
        $this->getEntityManager()->persist($employee);
        $this->getEntityManager()->flush($employee);
    }

    /**
     * @param $id
     * @return Employee
     */
//    public function find($id)
//    {
//        $this->find($id);
//    }
}
