<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleCounter extends Component
{
    public $count = 0;
    public $history = [];

    public function increment()
    {
        $this->count++;
        $this->history[] = "Увеличили до {$this->count}";
        if (count($this->history) > 5) array_shift($this->history);
    }

    public function decrement()
    {
        $this->count--;
        $this->history[] = "Уменьшили до {$this->count}";
        if (count($this->history) > 5) array_shift($this->history);
    }

    public function resetCount()
    {
        $this->count = 0;
        $this->history[] = "Сбросили на 0";
    }

    public function render()
    {
        return view('livewire.simple-counter');
    }
}