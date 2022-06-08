<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Media;
use App\Models\Service;
use Livewire\Component;

class AdminEditServiceComponent extends Component
{
    public $media_id;
    public $kategori_web;
    public $category_id;
    public $proses;
    public $keterangan;
    public $harga;

    public function mount($id)
    {
        $product = Service::where('id', $id)->first();
        $this->media_id = $product->media_id;
        $this->kategori_web = $product->kategori_web;
        $this->category_id = $product->category_id;
        $this->proses = $product->proses;
        $this->keterangan = $product->keterangan;
        $this->harga = $product->harga;
        $this->service_id = $product->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'media_id' => 'required',
            'kategori_web' => 'required',
            'category_id' => 'required',
            'proses' => 'required',
            'keterangan' => 'required',
            'harga' => 'required|numeric',
        ]);
    }

    public function updateProduct()
    {
        $this->validate([
            'media_id' => 'required',
            'kategori_web' => 'required',
            'category_id' => 'required',
            'proses' => 'required',
            'keterangan' => 'required',
            'harga' => 'required|numeric',
        ]);

        $product = Service::find($this->service_id);
        $product->media_id = $this->media_id;
        $product->kategori_web = $this->kategori_web;
        $product->category_id = $this->category_id;
        $product->proses = $this->proses;
        $product->keterangan = $this->keterangan;
        $product->harga = $this->harga;
        $product->save();
        session()->flash('message', 'Product has been updated successfully!');
    }

    public function render()
    {
        $medias = Media::all();
        $categories = Category::all();
        return view('livewire.admin.admin-edit-service-component', ['categories' => $categories, 'medias' => $medias])->layout('layouts.base');
    }
}
