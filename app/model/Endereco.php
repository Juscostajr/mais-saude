<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of Endereco
 *
 * @author usuario
 */
/**
 * @Entity
 * @Table(name="ENDERECO")
 */
class Endereco {
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="CD_ENDERECO",type="integer", length=8, unique=true, nullable=false)
     */
    private $id;
    /**
     * @Column(name="DS_CEP",type="string", length=9, unique=true, nullable=false)
     */
    private $zip;
    /**
     * @Column(name="NR_DOMICILIO",type="integer", length=5, nullable=false)
     */
    private $number;
    /**
     * @Column(name="DS_LOGRADOURO",type="string", length=80, nullable=false)
     */
    private $place;
    /**
     * @Column(name="DS_CIDADE",type="string", length=40, nullable=false)
     */
    private $city;
        /**
     * @Column(name="DS_LATITUDE",type="string", length=10)
     */
    private $lat;
        /**
     * @Column(name="DS_LONGITUDE",type="string", length=10)
     */
    private $long;
    
    
    
    public function getId() {
        return $this->id;
    }

    public function getZip() {
        return $this->zip;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getPlace() {
        return $this->place;
    }

    public function getCity() {
        return $this->city;
    }

    public function getLat() {
        return $this->lat;
    }

    public function getLong() {
        return $this->long;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setPlace($place) {
        $this->place = $place;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setLat($lat) {
        $this->lat = $lat;
    }

    public function setLong($long) {
        $this->long = $long;
    }


}
