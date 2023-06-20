<?php

namespace App\Http\Livewire\EventSeminar;

use Livewire\Component;
use App\Models\Entities\Event;
use Livewire\WithPagination;

class Idx extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $event_id = Event::where('event_type', '3')->get();
        return view('livewire.event-seminar.idx', [
            'event_id'=>$event_id
        ])->layout('adminlte::page');
    }
}
