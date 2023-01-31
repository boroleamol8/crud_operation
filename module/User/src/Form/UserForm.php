<?php
namespace User\Form;

//use Zend\Form\Form;
use Zend\Form\Form;
use Zend\Form\Element;

class UserForm extends Form
{

    public function __construct()
    {
        parent::__construct('user');

        $this->setAttribute('method', 'POST');

        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'first_name',
            'type' => 'text',
            'options' => [
                'label' => 'First Name'
            ]
        ]);

        $this->add([
            'name' => 'last_name',
            'type' => 'text',
            'options' => [
                'label' => 'Last Name'
            ]
        ]);

       
        $this->add([
            'name' => 'policy_no',
            'type' => 'text',
            'options' => [
                'label' => 'Policy Number'
            ]
        ]);
        
        $this->add([
            'type' => Element\Date::class,
            'name' => 'start_date',
            'options' => [
                'label' => 'Start Date',
                'format' => 'Y-m-d',
            ]
            ]);

        $this->add([
            'type' => Element\Date::class,
            'name' => 'end_date',
            'options' => [
                'label' => 'End Date',
                'format' => 'Y-m-d',
            ]
        ]);

        $this->add([
            'name' => 'premium',
            'type' => 'text',
            'options' => [
                'label' => 'Premimun'
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
               'value' => 'Save',
               'id'    => 'buttonSave'
            ]
        ]);

    }

}
