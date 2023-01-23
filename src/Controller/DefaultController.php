<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DefaultController extends AbstractController
{
    public function __construct(private HttpClientInterface $client)
    {}

    #[Route('/')]
    public function default(): JsonResponse
    {
        return new JsonResponse('Hello There');
    }

    #[Route('/api')]
    public function api(): JsonResponse
    {
        return $this->json($this->client->request('GET', 'https://api.github.com/users/GITFenix')->toArray());
    }

    #[Route('/post')]
    public function post(Request $request): JsonResponse
    {
        return $this->json($request->request->all());
    }
}
