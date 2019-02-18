<?php

namespace App\Controller;

use App\Entity\Personalinfo;
use App\Form\PersonalinfoType;
use App\Repository\PersonalinfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/personalinfo")
 */
class PersonalinfoController extends Controller
{
    /**
     * @Route("/", name="personalinfo_index", methods={"GET"})
     */
    public function index(PersonalinfoRepository $personalinfoRepository): Response
    {
        return $this->render('personalinfo/index.html.twig', [
            'personalinfos' => $personalinfoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="personalinfo_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $personalinfo = new Personalinfo();
        $form = $this->createForm(PersonalinfoType::class, $personalinfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($personalinfo);
            $entityManager->flush();

            return $this->redirectToRoute('personalinfo_index');
        }

        return $this->render('personalinfo/new.html.twig', [
            'personalinfo' => $personalinfo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="personalinfo_show", methods={"GET"})
     */
    public function show(Personalinfo $personalinfo): Response
    {
        return $this->render('personalinfo/show.html.twig', [
            'personalinfo' => $personalinfo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="personalinfo_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Personalinfo $personalinfo): Response
    {
        $form = $this->createForm(PersonalinfoType::class, $personalinfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personalinfo_index', [
                'id' => $personalinfo->getId(),
            ]);
        }

        return $this->render('personalinfo/edit.html.twig', [
            'personalinfo' => $personalinfo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="personalinfo_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Personalinfo $personalinfo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personalinfo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($personalinfo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('personalinfo_index');
    }
}
