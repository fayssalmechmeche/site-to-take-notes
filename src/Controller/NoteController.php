<?php

namespace App\Controller;

use App\Entity\Card;
use App\Entity\Matter;
use App\Form\CardType;
use App\Form\MatterType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NoteController extends AbstractController
{


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_note')]
    public function index(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $matters = $this->entityManager->getRepository(Matter::class)->findAll();
        $matter = new Matter();
        $form = $this->createForm(MatterType::class, $matter);
        $form = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->getData();
            $fileName = $form->get("image")->getData();

            $originalFilename = pathinfo($fileName->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $fileName->guessExtension();
            $directory = "assets/img/";
            $matter->setImage($newFilename);
            $matter->setSlug($matter->getName());
            $fileName->move($directory, $newFilename);
            $data = $form->getData();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($data);
            $entityManager->flush();
        };
        return $this->renderForm(
            'note/index.html.twig',
            [
                'form' => $form,
                'matters' => $matters,

            ]
        );
    }

    #[Route('/{slug}', name: 'app_note_matter')]
    public function show($slug, Request $request, ManagerRegistry $doctrine): Response
    {

        $matter = $this->entityManager->getRepository(Matter::class)->findOneBySlug($slug);
        $cards = $this->entityManager->getRepository(Card::class)->findByMatter($matter);
        $card = new Card();
        $form = $this->createForm(CardType::class, $card);
        $form = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $card->setMatter($matter);
            $entityManager = $doctrine->getManager();
            $entityManager->persist($data);
            $entityManager->flush();
        };

        if (!$matter) {
            return $this->redirectToRoute('app_note');
        }

        return $this->renderForm('matter/index.html.twig', [
            'form' => $form,
            'matter' => $matter,
            'cards' => $cards
        ]);
    }

    #[Route('/{slug}/create', name: 'app_note_matter_create')]
    public function create($slug, Request $request, ManagerRegistry $doctrine): Response
    {

        $matter = $this->entityManager->getRepository(Matter::class)->findOneBySlug($slug);
        $card = new Card();
        $form = $this->createForm(CardType::class, $card);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $card->setMatter($matter);
            $entityManager = $doctrine->getManager();
            $entityManager->persist($data);
            $entityManager->flush();
        };

        if (!$matter) {
            return $this->redirectToRoute('matter/index.html.twig');
        }
        return $this->renderForm('matter/create.html.twig', [
            'form' => $form,
            'matter' => $matter
        ]);
    }
}
