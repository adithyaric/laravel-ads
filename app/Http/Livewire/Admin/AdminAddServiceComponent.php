<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Media;
use App\Models\Service;
use Livewire\Component;

class AdminAddServiceComponent extends Component
{
    public $media_id;
    public $kategori_web;
    public $category_id;
    public $proses;
    public $keterangan;
    public $harga;

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

    public function storeService()
    {
        $this->validate([
            'media_id' => 'required',
            'kategori_web' => 'required',
            'category_id' => 'required',
            'proses' => 'required',
            'keterangan' => 'required',
            'harga' => 'required|numeric',
        ]);
        $product = new Service();
        $product->media_id = $this->media_id;
        $product->kategori_web = $this->kategori_web;
        $product->category_id = $this->category_id;
        $product->proses = $this->proses;
        $product->keterangan = $this->keterangan;
        $product->harga = $this->harga;
        $product->save();
        session()->flash('message', 'Service has been created successfully!');
    }

    public function render()
    {
        $medias = Media::all();
        $categories = Category::all();

        return view('livewire.admin.admin-add-service-component', ['categories' => $categories, 'medias' => $medias])->layout('layouts.base');

    }
}
