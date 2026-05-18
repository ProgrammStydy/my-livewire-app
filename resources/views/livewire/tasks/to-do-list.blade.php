<div>
    <h3>Мои задачи</h3>

    <div>
        <input type="text" wire:model="newTask" placeholder="Новая задача">
        <button wire:click="addTask">Добавить</button>
    </div>

    <ul>
        @foreach($tasks as $task)
            <li wire:key="task-{{ $task['id'] }}">
                <input type="checkbox" wire:click="toggleDone({{ $task['id'] }})" @if($task['done']) checked @endif>
                <span style="@if($task['done']) text-decoration: line-through; @endif">{{ $task['name'] }}</span>
                <button wire:click="deleteTask({{ $task['id'] }})">🗑️</button>
            </li>
        @endforeach
    </ul>
</div>