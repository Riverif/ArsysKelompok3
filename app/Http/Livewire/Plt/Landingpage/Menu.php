<?php

namespace App\Http\Livewire\Plt\Landingpage;

use Livewire\Component;

/**
 * Summary of Menu
 */
class Menu extends Component
{
    public function render()
    {
        return view('livewire.plt.landingpage.menu');
    }

    public function setMenu($selection)
    {
        // dd($selection); 
        $this->emit('setMenu_PLT', $selection);
    }
}
