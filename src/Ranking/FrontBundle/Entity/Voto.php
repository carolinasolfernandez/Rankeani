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
     * @ORM\ManyToOne(targetEntity="Participante", cascade={"persist"})
     */
    protected $participante;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    protected $valor;

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

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
        return $this;
    }

}
