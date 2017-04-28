<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of PROFISSIONAL
 *
 * @author usuario
 */
/**
 * @Entity
 * @Table(name="PROFISSIONAL")
 */
class Profissional {
    //put your code here
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="CD_PROFISSIONAL",type="integer", unique=true, nullable=false)
     */
    private $id;
      /**
     * @Column(name="NM_PROFISSIONAL",type="string") 
     */
    private $name;
     /**
     * @Column(type="string", name="DS_ESPECIALIDADE") 
     */
    private $specialty;
    /**
     * @ManyToOne(targetEntity="Clinica", inversedBy="profesionals")
     * @JoinColumn(name="FK_CLINICA", referencedColumnName="CD_CLINICA")
     */
    private $clinic;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSpecialty() {
        return $this->specialty;
    }

    public function getClinic() {
        return $this->clinic;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSpecialty($specialty) {
        $this->specialty = $specialty;
    }

    public function setClinic($clinic) {
        $this->clinic = $clinic;
    }


}
