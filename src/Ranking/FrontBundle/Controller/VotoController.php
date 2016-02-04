<?php

namespace Ranking\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Ranking\FrontBundle\Entity\Voto;

/**
 * @Route("/voto")
 */
class VotoController extends Controller {

    /**
     * @Route("/personal", name="voto_personal")
     */
    public function personalAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $participantes = $em->getRepository('RankingFrontBundle:Participante')->getRanking($this->getUsuario());
        return $this->render('RankingFrontBundle:Voto:personal.html.twig', array("participantes" => $participantes));
    }

    /**
     * @Route("/update", name="voto_update")
     */
    public function updateAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        foreach (explode(",", $request->get("participantesIds")) as $key => $participanteId) {
            $usuario = $this->getUsuario();
            $participante = $em->getRepository('RankingFrontBundle:Participante')->find($participanteId);
            $voto = $em->getRepository('RankingFrontBundle:Voto')->findOneBy(array("usuario" => $usuario, "participante" => $participante));
            if (!$voto) {
                $voto = new Voto();
                $voto->setUsuario($usuario);
                $voto->setParticipante($participante);
                $em->persist($voto);
            }
            $voto->setPosicion($key + 1);
        }
        
        $em->flush();

        return $this->redirect($this->generateUrl('voto_personal'));
    }

    /**
     * @Route("/general", name="voto_general")
     */
    public function generalAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $participantes = $em->getRepository('RankingFrontBundle:Participante')->getRanking();
        return $this->render('RankingFrontBundle:Voto:general.html.twig', array("participantes" => $participantes));
    }
    
    protected function getUsuario() {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('RankingFrontBundle:Usuario')->find(1);
    }

}
