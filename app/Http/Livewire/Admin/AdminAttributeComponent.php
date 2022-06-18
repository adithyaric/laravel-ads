<?php

namespace App\Http\Livewire\Admin;

use App\Models\Attribute;
use Livewire\Component;

class AdminAttributeComponent extends Component
{
    public function deleteAttribute($id)
    {
        $attribute = Attribute::find($id);
        $attribute->delete();
        session()->flash('message', 'Attribute has been deleted successfully!');
    }

    public function render()
    {
        $attributes = Attribute::paginate(5);
        return view('livewire.admin.admin-attribute-component', ['attributes' => $attributes])->layout('layouts.base');
    }
}
