<?php

namespace Cocoders\Bundle\ApiPayrollBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Get;
use Requestor\Request;
use Requestor\UseCase;

class AddHourlyEmployeeController
{
    /**
     * @var \Requestor\UseCase
     */
    private $useCase;

    public function __construct(UseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * @ParamConverter("test")
     * @param \Requestor\Request $test
     * @Get("/api/add")
     * @return mixed
     */
    public function getAddAction(Request $test)
    {
        return $this->useCase->execute($test);
    }
}
