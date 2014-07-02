<?php

namespace Cocoders\Bundle\PayrollBundle\Entity;

use Entity\Employee\PaymentClassificationFactory as BaseFactory;

class PaymentClassificationFactory implements BaseFactory
{
    public function make($classification, $arguments)
    {
        switch ($classification) {
            case 'hourly':
                return new HourlyClassification($arguments[0]);
        }
    }
}
