<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AdminServiceComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = Service::find($id);
        $product->delete();
        session()->flash('message', 'Product has been deleted successfully!');
    }

    public function render()
    {
        $products = Service::paginate(10);
        return view('livewire.admin.admin-service-component', ['products' => $products])->layout('layouts.base');
    }
}
