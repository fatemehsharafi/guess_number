<?php

namespace App\Repositories\GuessNumber;

use App\Utils\NumberStorage;

class GussNumber implements GuessNumberInterface
{
    private $messages = [
        'higher' => 'Higher!',
        'lower' => 'Lower!',
        'winner' => 'Winner!',
    ];
    private $numberStorage;
    public function __construct(NumberStorage $numberStorage)
    {
        $this->numberStorage = $numberStorage;
    }

    public function guessNumber($number): string
    {

        $randNum = $this->numberStorage->getNumber();

        $message = $this->messages['winner'];
        if ($randNum > $number) {
            $message = $this->messages['higher'];
        }
        if ($randNum < $number) {
            $message = $this->messages['lower'];
        }
        return $message;
    }
}
