<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of Tipo
 *
 * @author usuario
 */

/**
 * @Entity
 * @Table(name="CLASSE")
 */
class Tipo {
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="CD_CLASSE",type="integer", length=2, unique=true, nullable=false)
     */
    private $id;
    /** 
     * @Column(name="NM_CLASSE",type="string", length=40, unique=true, nullable=false)
     */
    private $name;
     /**
     * @OneToMany(targetEntity="CLINICA", mappedBy="type", indexBy="symbol", cascade={"persist", "remove"})
     */
    private $clinic;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }


    
}
