<?php

namespace App\Utils;

class NumberStorage
{
    public $numberKey = 'randNum';

    public function generateNumber(): void
    {
        $randNumber = rand(1, 100);
        session()->put($this->numberKey, $randNumber);
    }

    public function getNumber()
    {
        return session()->get($this->numberKey);
    }

    public function forgetNumber()
    {
        session()->forget($this->numberKey);
    }
}
