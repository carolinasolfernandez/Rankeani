<?php

namespace Ranking\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ranking\Resources\Entity\BaseEntitySoftDelete;
use Gedmo\Mapping\Annotation as GEDMO;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @GEDMO\SoftDeleteable(fieldName="deletedAt")
 * @ORM\Entity(repositoryClass="Ranking\FrontBundle\Repository\ParticipanteRepository")
 */
class Participante extends BaseEntitySoftDelete {

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    protected $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Voto", mappedBy="participante", cascade={"persist"})
     */
    protected $votos;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }
    
    public function addVoto(Voto $voto) {
        $this->votos[] = $voto;
        return $this;
    }

    public function getTarifasConceptosFacturables() {
        return $this->votos;
    }
    
    public function removeVoto(Voto $voto) {
        $this->votos->removeElement($voto);
    }

}
