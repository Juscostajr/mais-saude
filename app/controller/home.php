<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;


/**
 * Description of Example
 *
 * @author usuario
 */
use App\Core\View;


class Home extends \App\Core\Controller {
    //put your code here

    public function index() {
        
        $db = new \App\Core\DataBase;
        $c = new \App\Model\Clinica();
        $anotation = new \App\Model\Anotacao();
        $address = new \App\Model\Endereco();
        $type = new \App\Model\Tipo();
        

        
        
        
//        $clinica = $db->find('Clinica', 7);
//        $clinica =\Doctrine\Common\Util\Debug::dump($clinica->getPhones());
        
        $list = json_decode($json);
        $clinica = "";
        foreach ($list as $data){
            foreach ($data as $dd){
                echo '<b>'.$dd->category . '</b><br>';  
                foreach ($dd->data as $de){
                    echo $de->discount . '<br>';
                    echo $de->name . '<br>';
                    echo $de->address . '<br>';
                    echo $de->phone . '<br><br>';
                }
              
            }
            
        }
        
        $address->setCity("Campo Mourão");
        $address->setPlace("Av. Manoel Mendes de Camargo");
        $address->setNumber(252);
        $address->setZip(87300120);
        $address->setLat("-655544");
        $address->setLong("45488");                
        
        $anotation->setDescription("Qualquer coisa");
        $anotation->setClinic($c);
        
        
        
        $type->setName('Exame de Imagem');
               
        
        $c->setName("Clinica do Pedro");
        $c->setAddress($address);
        $c->setSpecialty("Exame de Ultra Som");
        $c->setType($type);   
        $c->addPhone(new \App\Model\Telefone(15599781758, $c));
        $c->addPhone(new \App\Model\Telefone(15599781755, $c));

        $c->addAnotation($anotation);
        $db->save($c);
        
        
        
        
        //$clinica = $db->find('Clinica', 6);
        
       // $this->render(new View('pages/home'),['clinicas' => $clinica->getPhones(), 'head' => '']);
    }



}
