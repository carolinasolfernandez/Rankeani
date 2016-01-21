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
 * @Route("/participante")
 */
class ParticipanteController extends Controller {

    /**
     * @Route("/", name="participante")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $participantes = $em->getRepository('RankingFrontBundle:Participante')->findAll();
        return $this->render('RankingFrontBundle:Participante:index.html.twig', array("participantes" => $participantes));
    }

    /**
     * @Route("/update", name="participante_update")
     */
    public function updateAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $participantesIds = explode(",", $request->get("participantesIds"));
        $usuario = $em->getRepository('RankingFrontBundle:Usuario')->find($request->get("usuarioId"));

        if (count(array_unique($participantesIds)) < count($participantesIds)) {
            echo "has duplicates";
        }

        foreach ($participantesIds as $key => $participanteId) {
            $participante = $em->getRepository('RankingFrontBundle:Participante')->find($participanteId);

            $voto = new Voto();
            $voto->setUsuario($usuario);
            $voto->setParticipante($participante);
            $voto->setValor(count($participantesIds) - $key);

            $em->persist($voto);
        }

        $em->flush();

        return $this->redirect($this->generateUrl('participante'));
    }

}
