<?php

namespace Cocoders\Bundle\ApiPayrollBundle\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use UseCase\AddEmployee\AddHourlyEmployeeRequest;

class AddHourlyEmployeeParamConverter implements ParamConverterInterface
{
    public function apply(Request $request, ParamConverter $configuration)
    {
        //hardcoded - should be taken from request
        $user = new AddHourlyEmployeeRequest();
        $user->address = 'test';
        $user->hourlyRate = '12';
        $user->name = 'ASDAC';

        $param = $configuration->getName();
        $request->attributes->set($param, $user);

        return true;
    }

    public function supports(ParamConverter $configuration)
    {
        return 'test' === $configuration->getName();
    }
}
