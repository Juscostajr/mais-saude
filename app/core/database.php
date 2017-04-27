<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author usuario
 */

namespace App\Core;

use \Doctrine\ORM\Tools\Setup;
use \Doctrine\ORM\EntityManager;

class DataBase {

//onde irão ficar as entidades do projeto? Defina o caminho aqui
    private $entidades = array(__DIR__ . "/model");
    private $namespace = 'App\\Model\\';
    private $isDevMode = true;
    private $entityManager;

    function __construct() {
// configurações de conexão. Coloque aqui os seus dados
        $dbParams = array(
            'host' => '179.188.16.9',
            'driver' => 'pdo_mysql',
            'user' => 'acicamaisaude',
            'password' => 'g321ggsaude',
            'dbname' => 'acicamaisaude',
        );

//setando as configurações definidas anteriormente

        $config = Setup::createAnnotationMetadataConfiguration($this->entidades, $this->isDevMode);

//criando o Entity Manager com base nas configurações de dev e banco de dados
        $this->entityManager = EntityManager::create($dbParams, $config);
    }

    public function find(string $entityName, int $id) {
        return $this->entityManager->find($this->namespace . $entityName, $id);
    }

    public function save($obj) {
        $this->entityManager->persist($obj);
        $this->entityManager->flush();
    }

    public function findAll($entityName) {
        return $this->entityManager->getRepository($this->namespace . $entityName)->findAll();
    }

    public function getJson($entityName) {
        $json = array();
        $result = $this->findAll($entityName);
        foreach ($result as $key => $r) {
            $json[$key] = $r->jsonSerialize();
        }
        return $json;
    }

}
