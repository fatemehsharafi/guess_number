<?php

namespace App\Http\Controllers;

use App\Traits\Serializer;
use App\Utils\NumberStorage;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    use Serializer;

    private $numberStorage;

    public function __construct(NumberStorage $numberStorage)
    {
        $this->numberStorage = $numberStorage;
    }

    public function index()
    {
        $this->numberStorage->generateNumber();
        return view('index');
    }

    public function regenerateNumber(): JsonResponse
    {
        $this->numberStorage->forgetNumber();
        $this->numberStorage->generateNumber();

        return $this->toJson();
    }
}
