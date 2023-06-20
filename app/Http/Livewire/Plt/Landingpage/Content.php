<?php

namespace App\Http\Livewire\Plt\Landingpage;

use Livewire\Component;

class Content extends Component
{
    public $content = null;
    protected $listeners =['setMenu_PLT'];
    public function render()
    {
        return view('livewire.plt.landingpage.content');
    }
    public function setMenu_PLT($selection){
        // dd($selection.' in content component');
        $this->content = $selection;
    }
}
