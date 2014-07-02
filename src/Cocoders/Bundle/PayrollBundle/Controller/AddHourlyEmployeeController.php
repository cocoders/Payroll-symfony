<?php

namespace Cocoders\Bundle\PayrollBundle\Controller;

use Requestor\UseCase;
use Responder\AddEmployee\AddEmployeeResponse;
use Responder\AddEmployee\AddHourlyEmployeeResponder;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class AddHourlyEmployeeController implements AddHourlyEmployeeResponder
{
    /**
     * @var \Requestor\UseCase
     */
    private $useCase;
    /**
     * @var \Symfony\Component\Form\FormInterface
     */
    private $addHourlyEmployeeForm;
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface
     */
    private $templating;

    public function __construct(UseCase $useCase, FormInterface $addHourlyEmployeeForm, EngineInterface $templating)
    {
        $this->useCase = $useCase;
        $this->useCase->addResponder($this);

        $this->addHourlyEmployeeForm = $addHourlyEmployeeForm;
        $this->templating = $templating;
    }

    public function addAction(Request $request)
    {
        $this->addHourlyEmployeeForm->handleRequest($request);

        if ($this->addHourlyEmployeeForm->isValid()) {
            return $this->useCase->execute($this->addHourlyEmployeeForm->getData());
        }

        return $this->templating->renderResponse(
            'CocodersPayrollBundle:AddHourlyEmployee:add.html.twig',
            ['form' => $this->addHourlyEmployeeForm->createView()]
        );
    }


    public function success(AddEmployeeResponse $addEmployeeResponse)
    {
        return $this->templating->renderResponse(
            'CocodersPayrollBundle:AddHourlyEmployee:success.html.twig',
            ['id' => $addEmployeeResponse->id]
        );
    }
}
