<?php

namespace CandidateBack\CommonBundle\Controller;

use CandidateBack\CommonBundle\Entity\Candidate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;

class ProfilAPIController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getProfilAction()
    {
        $em = $this->getDoctrine()->getManager();
        $table = [];
        $candidate = $em->getRepository('CandidateBackCommonBundle:Candidate')->find(1);
        $candidate2 = $em->getRepository('CandidateBackCommonBundle:Candidate')->getBio($candidate);
        $table{"candidate"} = $candidate;
        //var_dump($candidate2);

        return $table;
        //return $table;
    }

}

