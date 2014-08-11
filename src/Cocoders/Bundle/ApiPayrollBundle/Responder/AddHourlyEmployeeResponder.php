<?php

namespace Cocoders\Bundle\ApiPayrollBundle\Responder;

use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandlerInterface;
use Responder\AddEmployee\AddEmployeeResponse;

class AddHourlyEmployeeResponder implements \Responder\AddEmployee\AddHourlyEmployeeResponder
{
    /**
     * @var \FOS\RestBundle\View\ViewHandlerInterface
     */
    private $viewHandlerInterface;

    public function __construct(ViewHandlerInterface $viewHandlerInterface)
    {
        $this->viewHandlerInterface = $viewHandlerInterface;
    }

    public function success(AddEmployeeResponse $addEmployeeResponse)
    {
        return $this->viewHandlerInterface->handle(View::create($addEmployeeResponse, 201));
    }
}
