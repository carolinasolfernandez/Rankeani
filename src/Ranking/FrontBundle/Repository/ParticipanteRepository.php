<?php

namespace Ranking\FrontBundle\Repository;

use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;

class ParticipanteRepository extends EntityRepository {

    public function getRanking($usuario = null) {
        $sql = "
        SELECT p.id, p.nombre AS nombre, avg(v.posicion) AS posicion 
        FROM participante p 
        LEFT JOIN voto v 
        ON v.participante_id = p.id 
        ";
        
        if ($usuario) {
            $sql .= "AND v.usuario_id = '".$usuario->getId()."'";
        }
        
        $sql .= "
        GROUP BY p.id, p.nombre 
        ORDER BY ISNULL(posicion), posicion
        ";
        
        $rsm = new ResultSetMapping;
        $rsm->addScalarResult('id', 'id');
        $rsm->addScalarResult('nombre', 'nombre');
        $rsm->addScalarResult('posicion', 'posicion');
        $query = $this->getEntityManager()->createNativeQuery($sql, $rsm);
        
        return $query->getResult();
    }

}
