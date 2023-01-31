<?php

namespace User\Model;
use Zend\InputFilter\InputFilterInterface; 
use Zend\InputFilter\InputFilterAwareInterface; 
use Zend\InputFilter\InputFilter;  


class User implements InputFilterAwareInterface
{

    protected $id;
    protected $first_name;
    protected $last_name;
    protected $policy_no;
    protected $start_date;
    protected $end_date;
    protected $premium;
    protected $inputFilter;  
    public function setInputFilter(InputFilterInterface $inputFilter) { 
       throw new \Exception("Not used"); 
    }  
    public function getInputFilter() { 
       if (!$this->inputFilter) { 
          $inputFilter = new InputFilter(); 
         
          $inputFilter->add(array( 
            'name' => 'last_name', 
            'required' => true, 
            'filters' => array( 
              array('name' => 'StripTags'), 
              array('name' => 'StringTrim'), 
            ),
         )); 
         $inputFilter->add(array( 
            'name' => 'policy_no', 
            'required' => true, 
            'filters' => array( 
               array('name' => 'StripTags'), 
               array('name' => 'StringTrim'), 
            ),
         )); 
         $inputFilter->add(array( 
            'name' => 'premium', 
            'required' => true, 
            'filters' => array( 
               array('name' => 'StripTags'), 
               array('name' => 'StringTrim'), 
             
            ),
         )); 
          $this->inputFilter = $inputFilter; 
         }
        
         return $this->inputFilter; 
      }
    public function exchangeArray(array $data)
    {

        $this->id = $data['id'];
        $this->first_name= $data['first_name'];
        $this->last_name= $data['last_name'];
        $this->policy_no= $data['policy_no'];
        $this->start_date= $data['start_date'];
        $this->end_date= $data['end_date'];
        $this->premium= $data['premium'];   

    }
    public function getArrayCopy()
    {
        return [
                'id' => $this->id, 
                'first_name' => $this->first_name,
                'last_name' => $this->last_name, 
                'policy_no' => $this->policy_no, 
                'start_date' => $this->start_date, 
                'end_date' => $this->end_date, 
                'premium' => $this->premium, 
        ];  

    }
     public function getId()
    {
       return $this->id;
    }
    public function getFirstName()
    {
       return $this->first_name;
    }

    public function getLastName()
    {
       return $this->last_name;
    }

    public function getPolicyNo()
    {
       return $this->policy_no;
    }
    public function getStartDate()
    {
       return $this->start_date;
    }
    public function getEndDate()
    {
       return $this->end_date;
    }
    public function getPremimum()
    {
       return $this->premium;
    }
    
}
