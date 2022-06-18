<?php

namespace App\Http\Livewire\Admin;

use App\Models\Attribute;
use Livewire\Component;

class AdminEditAttributeComponent extends Component
{
    public $attribute_id;
    public $name;

    public function mount($id)
    {
        $attribute = Attribute::where('id', $id)->first();
        $this->name = $attribute->name;
        $this->attribute_id = $attribute->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
        ]);
    }

    public function updateAttribute()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $attribute = Attribute::find($this->attribute_id);
        $attribute->name = $this->name;
        $attribute->save();
        session()->flash('message', 'Attribute has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-attribute-component')->layout('layouts.base');
    }
}
