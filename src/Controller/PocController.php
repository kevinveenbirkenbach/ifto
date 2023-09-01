<?php

namespace App\Controller;

use App\InMemoryDataStore;
use App\Renderer;
use App\Transformer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PocController extends AbstractController
{
    #[Route('/poc', name: 'app_poc')]
    public function index(InMemoryDataStore $dataStore, Transformer $transformer, Renderer $renderer): Response
    {
        $entries = $dataStore->query(['alive']);

        foreach ($entries as $index => $entry) {
            $entries[$index] = $transformer->transform($entry);
        }

        $output = $renderer->render($entries);

        return new Response($output, Response::HTTP_OK);
    }
}
