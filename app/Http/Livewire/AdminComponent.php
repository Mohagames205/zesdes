<?php

namespace App\Http\Livewire;

use App\Models\Picture;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AdminComponent extends Component
{
    public $pictures;

    public function mount()
    {
        $this->pictures = Picture::where('is_allowed', False)->get();
    }

    public function render()
    {
        return view('livewire.admin-component');
    }

    public function accept(int $id)
    {
        $this->pictures = $this->pictures->whereNotIn('id', $id);
        $picture = Picture::where('id', $id)->first();
        $picture->is_allowed = True;
        $picture->save();
        $this->dispatchBrowserEvent('swal',
            ['title' => 'Goedgekeurd!!',
                'timer' => 3000,
                'position'=>'bottom-right',
                'icon'=>'success',
                'toast'=>true]);

    }

    public function deny(int $id)
    {
        $picture = Picture::where('id', $id)->first();
        $filename = $picture->filename;
        $picture->delete();
        $this->pictures = $this->pictures->whereNotIn('id', $id);

        Storage::disk('pictures')->delete($filename);
        $this->dispatchBrowserEvent('swal', ['title' => 'Afgewezen!',
            'timer' => 3000,
            'position'=>'bottom-right',
            'icon'=>'success',
            'toast'=>true]);
    }

}
