<?php

namespace Cocoders\Bundle\PayrollBundle\Entity;

use Entity\Employee\PaymentScheduleFactory as BaseFactory;

class PaymentScheduleFactory implements BaseFactory
{
    public function make($classification)
    {
        switch ($classification) {
            case 'weekly':
                return new WeeklySchedule();
        }
    }
}
