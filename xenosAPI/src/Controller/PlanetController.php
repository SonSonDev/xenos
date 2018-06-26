<?php

namespace App\Controller;

use App\Entity\Planet;
use App\Form\PlanetType;
use App\Repository\PlanetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/planet")
 */
class PlanetController extends Controller
{
    /**
     * @Route("/", name="planet_index", methods="GET")
     */
    public function index(PlanetRepository $planetRepository): Response
    {
        return $this->render('planet/index.html.twig', ['planets' => $planetRepository->findAll()]);
    }

    /**
     * @Route("/new", name="planet_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $planet = new Planet();
        $form = $this->createForm(PlanetType::class, $planet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($planet);
            $em->flush();

            return $this->redirectToRoute('planet_index');
        }

        return $this->render('planet/new.html.twig', [
            'planet' => $planet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="planet_show", methods="GET")
     */
    public function show(Planet $planet): Response
    {
        return $this->render('planet/show.html.twig', ['planet' => $planet]);
    }

    /**
     * @Route("/{id}/edit", name="planet_edit", methods="GET|POST")
     */
    public function edit(Request $request, Planet $planet): Response
    {
        $form = $this->createForm(PlanetType::class, $planet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('planet_edit', ['id' => $planet->getId()]);
        }

        return $this->render('planet/edit.html.twig', [
            'planet' => $planet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="planet_delete", methods="DELETE")
     */
    public function delete(Request $request, Planet $planet): Response
    {
        if ($this->isCsrfTokenValid('delete'.$planet->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($planet);
            $em->flush();
        }

        return $this->redirectToRoute('planet_index');
    }
}
