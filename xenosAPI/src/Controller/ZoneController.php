<?php

namespace App\Controller;

use App\Entity\Zone;
use App\Form\Zone1Type;
use App\Repository\ZoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/zone")
 */
class ZoneController extends Controller
{
    /**
     * @Route("/", name="zone_index", methods="GET")
     */
    public function index(ZoneRepository $zoneRepository): Response
    {
        return $this->render('zone/index.html.twig', ['zones' => $zoneRepository->findAll()]);
    }

    /**
     * @Route("/new", name="zone_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $zone = new Zone();
        $form = $this->createForm(Zone1Type::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($zone);
            $em->flush();

            return $this->redirectToRoute('zone_index');
        }

        return $this->render('zone/new.html.twig', [
            'zone' => $zone,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zone_show", methods="GET")
     */
    public function show(Zone $zone): Response
    {
        return $this->render('zone/show.html.twig', ['zone' => $zone]);
    }

    /**
     * @Route("/{id}/edit", name="zone_edit", methods="GET|POST")
     */
    public function edit(Request $request, Zone $zone): Response
    {
        $form = $this->createForm(Zone1Type::class, $zone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zone_edit', ['id' => $zone->getId()]);
        }

        return $this->render('zone/edit.html.twig', [
            'zone' => $zone,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zone_delete", methods="DELETE")
     */
    public function delete(Request $request, Zone $zone): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zone->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($zone);
            $em->flush();
        }

        return $this->redirectToRoute('zone_index');
    }
}
