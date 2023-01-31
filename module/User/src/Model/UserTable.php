<?php

namespace User\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class UserTable
{

    protected $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;

    }


    public function fetchAll()
    {
        return $this->tableGateway->select();
    }
    
    public function saveUser(User $user){
    	$data = [
    		'first_name' => $user->getFirstName(),
    		'last_name' => $user->getLastName(), 
                'policy_no' => $user->getPolicyNo(), 
                'start_date' => $user->getStartDate(), 
                'end_date' => $user->getEndDate(), 
                'premium' => $user->getPremimum(), 
    	];
        if($user->getId()){
            $this->tableGateway->update($data,[
                'id' => $user->getId()
            ]);
        }
        else{
            $this->tableGateway->insert($data);    
        }
    	
    }

    public function getUser(int $id){
        $current=$this->tableGateway->select([
            'id' =>$id
        ]);
        return $current->current();
    }
    public function deleteUser(int $id){
        $this->tableGateway->delete([
            'id' => $id
        ]);
    }
}
