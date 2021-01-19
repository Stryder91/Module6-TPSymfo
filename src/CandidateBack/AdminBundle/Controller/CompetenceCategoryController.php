<?php

namespace CandidateBack\AdminBundle\Controller;

use CandidateBack\AdminBundle\Form\CompetenceCategoryType;
use CandidateBack\CommonBundle\Entity\CompetenceCategory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CompetenceCategoryController extends Controller
{
    /**
     * @Route("/categories-competences", name="admin_competence_category_index")
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $competenceCategories = $em->getRepository('CandidateBackCommonBundle:CompetenceCategory')->findBy([], ['title' => 'ASC']);

        return $this->render('@CandidateBackAdmin/CompetenceCategory/index.html.twig', [
            'competenceCategories' => $competenceCategories
        ]);
    }


    /**
     * @Route("/categorie-competence/creer", name="admin_competence_category_create")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     */
    public function createAction(Request $request)
    {
        $competenceCategory = new CompetenceCategory();

        $form = $this->createForm(CompetenceCategoryType::class, $competenceCategory);

        // check if post sent
        if ($request->getMethod() == 'POST') {

            // bind data form
            $form->handleRequest($request);

            // valid form
            if ($form->isValid()) {

                // save in db
                $em = $this->getDoctrine()->getManager();
                $em->persist($competenceCategory);
                $em->flush();

                // send message
                $this->get('session')->getFlashBag()->add('info', 'Compétence catégorie enregistrée.');

                // redirect
                return $this->redirect($this->generateUrl('admin_competence_category_index'));
            }

        }

        // send view
        return $this->render('@CandidateBackAdmin/CompetenceCategory/create-edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/categorie-competence/editer/{id}", name="admin_competence_category_edit")
     * @param CompetenceCategory $competenceCategory
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     */
    public function editAction(CompetenceCategory $competenceCategory, Request $request)
    {
        $editForm = $this->createForm(CompetenceCategoryType::class, $competenceCategory);

        // check if post sent
        if ($request->getMethod() == 'POST') {

            // bind data form
            $editForm->handleRequest($request);

            // valid data
            if ($editForm->isValid()) {
                // call entity manager
                $em = $this->getDoctrine()->getManager();

                // persist and flush
                $em->persist($competenceCategory);
                $em->flush();

                // send flash message
                $this->get('session')->getFlashBag()->add('info', 'Compétence catégorie modifiée.');

                // redirect
                return $this->redirect($this->generateUrl('admin_competence_category_index'));
            }
        }

        // send view
        return $this->render('@CandidateBackAdmin/CompetenceCategory/create-edit.html.twig', [
            'form' => $editForm->createView(),
            'competenceCategory' => $competenceCategory
        ]);
    }

    /**
     * @Route("/categorie-competence/supprimer/{id}", name="admin_competence_category_delete")
     * @param Request $request
     * @param CompetenceCategory $competenceCategory
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response|null
     */
    public function deleteAction(Request $request, CompetenceCategory $competenceCategory)
    {
        // create empty form against csrf
        $form = $this->createFormBuilder()->getForm();

        // check if post sent
        if ($request->getMethod() == 'POST') {

            // bind data form
            $form->handleRequest($request);

            // validate data
            if ($form->isValid()) {

                // call entity manager
                $em = $this->getDoctrine()->getManager();

                // remove
                $em->remove($competenceCategory);
                $em->flush();

                // send flash message
                $this->get('session')->getFlashBag()->add('info', 'Compétence catégorie supprimée.');

                // redirect
                return $this->redirect($this->generateUrl('admin_competence_category_index'));
            }
        }

        // send view
        return $this->render('@CandidateBackAdmin/CompetenceCategory/delete.html.twig', [
            'form' => $form->createView(),
            'competenceCategory' => $competenceCategory
        ]);
    }
}
