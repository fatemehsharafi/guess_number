<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuessNumberRequest;
use App\Repositories\GuessNumber\GussNumber;
use App\Traits\Serializer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GuessController extends Controller
{
    use Serializer;

    private $guessNumberRepository;

    public function __construct(GussNumber $guessNumberRepository)
    {
        $this->guessNumberRepository = $guessNumberRepository;
    }

    public function index(GuessNumberRequest $request): JsonResponse
    {
        $result = $this->guessNumberRepository->guessNumber($request->number);
        return $this->toJson([], $result);
    }
}
