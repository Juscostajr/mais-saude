<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clinica
 *
 * @author usuario
 */

namespace App\Model;

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity
 *  @Table(name="CLINICA") 
 */
class Clinica implements \JsonSerializable {

    public function __construct() {
        $this->phones = new ArrayCollection();
        $this->profesionals = new ArrayCollection();
        $this->anotations = new ArrayCollection();
    }

    /**
     * @Id 
     *  @GeneratedValue(strategy="AUTO")
     *  @Column(type="integer", name="CD_CLINICA")    
     */
    private $id;

    /**
     * @Column(type="string", name="NM_CLINICA") 
     */
    private $name;

    /**
     * @OneToMany(targetEntity="TELEFONE", mappedBy="clinic", indexBy="symbol", cascade={"persist", "remove"})
     */
    private $phones;

    /** @OneToOne(targetEntity="Endereco")
     * @JoinColumn(name="FK_ENDERECO", referencedColumnName="CD_ENDERECO")
     */
    private $address;

    /**
     * @ManyToOne(targetEntity="Tipo", inversedBy="clinic",cascade={"persist", "remove"})
     * @JoinColumn(name="FK_CLASSE", referencedColumnName="CD_CLASSE")
     */
    private $type;
    /**
     * @OneToMany(targetEntity="PROFISSIONAL", mappedBy="clinic", indexBy="symbol", cascade={"persist", "remove"})
     */
    private $profesionals;
    /**
     * @OneToMany(targetEntity="Anotacao", mappedBy="clinic", cascade={"persist", "remove"})
     */
    private $anotations;
    /**
     * @Column(type="integer", name="VL_DESCONTO") 
     */
    private $discount;


      public function getProfesionals() {
        return $this->profesionals->toArray();
    }

    public function addProfesional(Profissional $profesional) {
        if (!$this->profesionals->contains($profesional)) {
            $this->profesionals->add($profesional);
        }
        return $this;
    }

    public function removeProfesional(Profissional $profesional) {
        if ($this->profesionals->contains($profesional)) {
            $this->profesionals->removeElement($profesional);
        }
        return $this;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setProfesional($profesional) {
        $this->profesional = $profesional;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }

            public function getAddress() {
        return $this->address;
    }

    public function getType() {
        return $this->type;
    }

    public function getSpecialty() {
        return $this->specialty;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setSpecialty($specialty) {
        $this->specialty = $specialty;
    }

    public function getId() {
        return $this->id;
    }

    public function getPhones() {
        return $this->phones->toArray();
    }

    public function addPhone(Telefone $phone) {
        if (!$this->phones->contains($phone)) {
            $this->phones->add($phone);
        }
        return $this;
    }

    public function removePhone(Telefone $phone) {
        if ($this->phones->contains($phone)) {
            $this->phones->removeElement($phone);
        }
        return $this;
    }
    public function getAnotations() {
        return $this->phones->toArray();
    }

    public function addAnotation(Anotacao $anotation) {
        if (!$this->anotations->contains($anotation)) {
            $this->anotations->add($anotation);
        }
        return $this;
    }

    public function removeAnotation(Anotacao $anotation) {
        if ($this->anotations->contains($anotation)) {
            $this->anotations->removeElement($anotation);
        }
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
