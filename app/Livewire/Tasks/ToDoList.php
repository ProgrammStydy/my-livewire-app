<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class ToDoList extends Component
{
    public $tasks = [];
    public $newTask = '';

    public function mount()
    {
        $this->tasks = [
            ['id' => 1, 'name' => 'Изучить Livewire', 'done' => false],
            ['id' => 2, 'name' => 'Сделать компонент', 'done' => false],
        ];
    }

    public function addTask()
    {
        if (trim($this->newTask) === '') return;
        $this->tasks[] = [
            'id' => count($this->tasks) + 1,
            'name' => $this->newTask,
            'done' => false
        ];
        $this->newTask = '';
    }

    public function toggleDone($taskId)
    {
        foreach ($this->tasks as &$task) {
            if ($task['id'] == $taskId) {
                $task['done'] = !$task['done'];
                break;
            }
        }
    }

    public function deleteTask($taskId)
    {
        $this->tasks = array_values(array_filter($this->tasks, fn($t) => $t['id'] != $taskId));
    }

    public function render()
    {
        return view('livewire.tasks.to-do-list');
    }
}