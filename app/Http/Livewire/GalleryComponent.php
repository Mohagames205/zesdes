<?php

namespace App\Http\Livewire;

use App\Models\Picture;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryComponent extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.gallery-component', [
            'pictures' => Picture::where('is_allowed', true)->paginate(10),
        ]);

    }


}
