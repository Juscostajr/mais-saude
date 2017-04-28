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
//        $json = '{
//   "foreach": [
//      {
//         "category": "Psicólogos",
//         "image": "psicologo.png",
//         "data": [
//            {
//               "discount": "40",
//               "name": "Psicologia Dra. Juliana Kikue Hiroki",
//               "address": "Av. José Custódio de Oliveira, 1944",
//               "phone": "(44) 3525-1155"
//            },
//            {
//               "discount": "50",
//               "name": "A.C. da Silva Clinica de Psicologia",
//               "address": "R. Mato Grosso, 1529",
//               "phone": "(44) 3810-1510"
//            },
//            {
//               "discount": "30",
//               "name": "Fabiana Schmit Doneda",
//               "address": "R. Harrison J. Borges, 1154 Sala 504",
//               "phone": "(44) 99816-6331"
//            },
//            {
//               "discount": "30",
//               "name": "Clinica Interligadas Khalaf",
//               "address": "Rua São Josafat, 1526 Sala 01",
//               "phone": "(44) 3068-4070"
//            },
//            {
//               "discount": "20",
//               "name": "Jean Pablo Guimarães Rossi",
//               "address": "Av Goioere 1649, Espaço Casulo",
//               "phone": "(44) 99168-5717"
//            },
//            {
//               "discount": "20",
//               "name": "Cristina Maria Galo",
//               "address": "Av Goioere 1649, Espaço Casulo",
//               "phone": "(44) 99937-7389"
//            },
//            {
//               "discount": "30",
//               "name": "Griziele Martins Feitoza",
//               "address": "Av Goioere 1649, Espaço Casulo",
//               "phone": "(44) 3810-0100"
//            },
//            {
//               "discount": "30",
//               "name": "Livia Yunis Casela",
//               "address": "R. Pitanga, 626",
//               "phone": "(44) 3523-4191"
//            },
//            {
//               "discount": "25",
//               "name": "Gisele Aparecida Feitoza Marek",
//               "address": "R. Comend. Noberto Marcondes, 554",
//               "phone": "(44) 3523-4191"
//            }
//         ]
//      },
//      {
//         "category": "Fisioterapeutas",
//         "image": "fisioterapeuta.png",
//         "data": [
//            {
//               "discount": "50",
//               "name": "Fisio Vida - Dra. Giselly Guelis Macowski",
//               "address": "Rua Mato Grosso, 1529",
//               "phone": "(44) 99976-1640"
//            },
//            {
//               "discount": "25",
//               "name": "Clinica De Fisioterapia Fsio Forma",
//               "address": "Rua São Paulo, 2005",
//               "phone": "(44) 3524-1390"
//            },
//            {
//               "discount": "20",
//               "name": "Odontologia Familiari",
//               "address": "Av. Irmaos Pereira, 1991",
//               "phone": "(44) 3524-1282"
//            }
//         ]
//      },
//      {
//         "category": "Nutricionistas",
//         "image": "nutricionista.png",
//         "data": [
//            {
//               "discount": "20",
//               "name": "Dra Tatiana Lopes",
//               "address": "R. Norberto Marcondes 554, 2º Andar Sala 11",
//               "phone": "(44)98438-9532"
//            },
//            {
//               "discount": "20",
//               "name": "Lais Klein",
//               "address": "Rua São Josafat 1298 Sala 02",
//               "phone": "(44)3810-6610"
//            },
//            {
//               "discount": "8",
//               "name": "Studio Fiore",
//               "address": "Av. Cap Indio Bandeira, 697",
//               "phone": "(44)3810-5055"
//            }
//         ]
//      },
//      {
//         "category": "Acupunturistas",
//         "image": "acupunturista.png",
//         "data": [
//            {
//               "discount": "20",
//               "name": "Irene Fiorilli Stersi",
//               "address": "Rua Harrison José Borges, 652",
//               "phone": "(44) 3523-2121"
//            }
//         ]
//      },
//      {
//         "category": "Dentistas",
//         "image": "dentista.png",
//         "data": [
//            {
//               "discount": "20",
//               "name": "Davidoff Ortodontia",
//               "address": "Rua Harrison José Borges, 722",
//               "phone": "(44) 3016-2041"
//            },
//            {
//               "discount": "20",
//               "name": "Dra. Camila Domanski de Souza",
//               "address": "Av. Capitão Indio Bandeira, 680",
//               "phone": "(44) 3523-8093"
//            },
//            {
//               "discount": "20",
//               "name": "Oral Sim",
//               "address": "Rua Roberto Brezezinski 1479",
//               "phone": "(44)3017-1717"
//            },
//            {
//               "discount": "20",
//               "name": "Clinica Vivencial Ortopediatria",
//               "address": "Rua Rocha Pombo, 1385",
//               "phone": "(44)3525-1018"
//            },
//            {
//               "discount": "20",
//               "name": "Dra. Gabriela Bottega Cirurgiã Dentista",
//               "address": "Ed. Empresárial Antares, 2º Andar Sala 2012",
//               "phone": "(44)3017-1135"
//            },
//            {
//               "discount": "20",
//               "name": "Odontologia Cleber Spaki",
//               "address": "R. Harisson José Borges, 1066",
//               "phone": "(44)3525-2338"
//            },
//            {
//               "discount": "20",
//               "name": "Oral Máxima",
//               "address": "Av. Capitão Índio Bandeira 1480, 1º Andar",
//               "phone": "(44)3017-3030"
//            },
//            {
//               "discount": "5",
//               "name": "Dra. Michele Balestrin",
//               "address": "Av. Manoel Mendes de Camargo, 1800, Sala 204",
//               "phone": "(44)3017-0177"
//            },
//            {
//               "discount": "20",
//               "name": "Cons. Leonardo Colman Isabella Becegato ",
//               "address": "R. Santa Catarina, 1702",
//               "phone": "(44)3525-5721"
//            },
//            {
//               "discount": "20",
//               "name": "Odontologia Familiare",
//               "address": "Av Irmãos Pereira, 1991",
//               "phone": "(44)3524-1282"
//            },
//            {
//               "discount": "20",
//               "name": "Dra. Fernanda Alves Domingues",
//               "address": "R. Rocha Pombo, 1385",
//               "phone": "(44)99911-3450"
//            }
//         ]
//      },
//      {
//         "category": "Lab. de Análises",
//         "image": "lab.png",
//         "data": [
//            {
//               "discount": "30",
//               "name": "Laboratório São Gabriel",
//               "address": "Av. Manoel Mendes de Camargo, 990",
//               "phone": "(44) 3525-1701"
//            },
//            {
//               "discount": "20",
//               "name": "Laboratório Santa Cecília",
//               "address": "Av. Manoel Mendes de Camargo, 731",
//               "phone": "(44) 3523-2063"
//            },
//            {
//               "discount": "25",
//               "name": "Laboratório Exame",
//               "address": "Av. Goioerê, 940",
//               "phone": "(44)3810-6636"
//            }
//         ]
//      },
//      {
//         "category": "Podólogos",
//         "image": "podologo.png",
//         "data": [
//            {
//               "discount": "20",
//               "name": "Espaço Dos Pés",
//               "address": "Av. Guilherme De P. Xavier, 1699",
//               "phone": "(44)99958-6407"
//            }
//         ]
//      }
//   ]
//}';
//        $list = json_decode($json);
//        $clinica = "";
//        foreach ($list as $data){
//            foreach ($data as $dd){
//                echo 'INSERT INTO CLASSES (NM_CLASSE) VALUES (\''.$dd->category . '\');<br>';  
//                foreach ($dd->data as $de){
//                    echo $de->discount . '<br>';
//                    echo $de->name . '<br>';
//                    echo $de->address . '<br>';
//                    echo $de->phone . '<br><br>';
//                }
//              
//            }
//            
//        }
//        
//        $address->setCity("Campo Mourão");
//        $address->setPlace("Av. Manoel Mendes de Camargo");
//        $address->setNumber(252);
//        $address->setZip(87300120);
//        $address->setLat("-655544");
//        $address->setLong("45488");                
//        
//        $anotation->setDescription("Qualquer coisa");
//        $anotation->setClinic($c);
//        
//        
//        
//        $type->setName('Exame de Imagem');
//               
//        
//        $c->setName("Clinica do Pedro");
//        $c->setAddress($address);
//        $c->setSpecialty("Exame de Ultra Som");
//        $c->setType($type);   
//        $c->addPhone(new \App\Model\Telefone(15599781758, $c));
//        $c->addPhone(new \App\Model\Telefone(15599781755, $c));
//
//        $c->addAnotation($anotation);
//        $db->save($c);
              
        $clinica = $db->find('Clinica',1);
        
        
        echo $clinica->getName();
        $this->render(new View('pages/home'),['clinica'=>$clinica]);
    }
}