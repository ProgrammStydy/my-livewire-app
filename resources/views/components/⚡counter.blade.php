<div>
    <h3>Счётчик: {{ $count }}</h3>
    <button wire:click="increment">+1</button>
    <button wire:click="decrement">-1</button>
    <button wire:click="resetCount">Сброс</button>

    <h4>Последние действия:</h4>
    <ul>
        @foreach($history as $event)
            <li>{{ $event }}</li>
        @endforeach
    </ul>
</div>