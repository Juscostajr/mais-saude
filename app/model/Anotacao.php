<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of Anotacao
 *
 * @author usuario
 */
/**
 * @Entity
 * @Table(name="ANOTACOES")
 */
class Anotacao {
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="CD_ANOTACAO",type="integer", length=4, unique=true, nullable=false)
     */
    private $id;
    /**
     * @Column(name="DS_ANOTACAO",type="string", nullable=false)
     */
    private $description;
    /**
     * @ManyToOne(targetEntity="Clinica", inversedBy="anotations")
     * @JoinColumn(name="FK_CLINICA", referencedColumnName="CD_CLINICA")
     */
    private $clinic;
    
    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getClinic() {
        return $this->clinic;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setClinic($clinic) {
        $this->clinic = $clinic;
    }


}
