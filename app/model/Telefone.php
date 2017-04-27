<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of Telefone
 *
 * @author usuario
 */
/**
 * @Entity
 * @Table(name="TELEFONE") 
 */
class Telefone {
    //put your code here
     
    /** @Id
     *  @Column(name="NR_TELEFONE",type="integer", length=11)
     */
    private $number;
    /**
     * @ManyToOne(targetEntity="Clinica", inversedBy="phones")
     * @JoinColumn(name="FK_CLINICA", referencedColumnName="CD_CLINICA")
     */
    private $clinic;
    
    public function __construct($number, $clinic) {
        $this->number = $number;
        $this->clinic = $clinic;
    }



    public function getNumber() {
        return $this->number;
    }

    public function getClinic() {
        return $this->clinic;
    }


    public function setNumber($numero) {
        $this->number = $numero;
    }

    public function setClinic($clinic) {
        $this->clinic = $clinic;
    }


    
    
}
