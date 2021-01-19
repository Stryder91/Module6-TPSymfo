<?php

namespace CandidateBack\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;

class RealisationAPIController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getRealisationsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $table = [];
        $candidate = $em->getRepository('CandidateBackCommonBundle:Candidate')->find(1);
        $realisations = $em->getRepository('CandidateBackCommonBundle:Realisation')->getPublishedRealisationsForCandidateByDateDesc($candidate);

        $table{"realisations"} = $realisations;
        //$table{"realisations"}["candidate"] = $candidate;

        //var_dump($candidate);

        return $table;
    }

}

