<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\Booking1Type;
use App\Repository\BookingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/booking")
 */
class BookingController extends Controller
{
    /**
     * @Route("/", name="booking_index", methods="GET")
     */
    public function index(BookingRepository $bookingRepository): Response
    {
        return $this->render('booking/index.html.twig', ['bookings' => $bookingRepository->findAll()]);
    }

    /**
     * @Route("/new", name="booking_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $booking = new Booking();
        $form = $this->createForm(Booking1Type::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);
            $em->flush();

            return $this->redirectToRoute('booking_index');
        }

        return $this->render('booking/new.html.twig', [
            'booking' => $booking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="booking_show", methods="GET")
     */
    public function show(Booking $booking): Response
    {
        return $this->render('booking/show.html.twig', ['booking' => $booking]);
    }

    /**
     * @Route("/{id}/edit", name="booking_edit", methods="GET|POST")
     */
    public function edit(Request $request, Booking $booking): Response
    {
        $form = $this->createForm(Booking1Type::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('booking_edit', ['id' => $booking->getId()]);
        }

        return $this->render('booking/edit.html.twig', [
            'booking' => $booking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="booking_delete", methods="DELETE")
     */
    public function delete(Request $request, Booking $booking): Response
    {
        if ($this->isCsrfTokenValid('delete'.$booking->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($booking);
            $em->flush();
        }

        return $this->redirectToRoute('booking_index');
    }
}
