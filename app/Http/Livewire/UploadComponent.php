<?php

namespace App\Http\Livewire;

use App\Models\Picture;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadComponent extends Component
{

    use WithFileUploads;

    public $photos = [];
    public $iteration;

    public function render($view = 'livewire.upload-component')
    {
        return view($view);
    }

    public function save()
    {
        if(count($this->photos) > 0)
        {

        }

        $this->validate([
            'photos.*' => 'image',
        ]);


        foreach ($this->photos as $photo) {
            $photo->store('pictures');
            $hashName = $photo->hashName();
            $picture = new Picture();
            $picture->user_id = auth()->user()->id;
            $picture->filename = $hashName;
            $picture->is_allowed = false;
            $picture->save();
        }

        $this->photos = [];
        $this->iteration++;

        $this->redirect(route('uploadcomplete'));
    }

    public function delete($index)
    {
        unset($this->photos[$index]);
    }
}
