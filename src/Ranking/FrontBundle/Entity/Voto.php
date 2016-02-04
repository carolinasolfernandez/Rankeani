<?php

namespace Ranking\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ranking\Resources\Entity\BaseEntitySoftDelete;
use Gedmo\Mapping\Annotation as GEDMO;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @GEDMO\SoftDeleteable(fieldName="deletedAt")
 */
class Voto extends BaseEntitySoftDelete {
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario", cascade={"persist"})
     */
    protected $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="Participante", inversedBy="votos", cascade={"persist"})
     */
    protected $participante;

    /**
     * @ORM\Column(type="integer")
     */
    protected $posicion;

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
        return $this;
    }

    public function getParticipante() {
        return $this->participante;
    }

    public function setParticipante($participante) {
        $this->participante = $participante;
        return $this;
    }

    public function getPosicion() {
        return $this->posicion;
    }

    public function setPosicion($posicion) {
        $this->posicion = $posicion;
        return $this;
    }

}
