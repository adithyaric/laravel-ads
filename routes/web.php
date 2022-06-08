<?php
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Admin\AdminServiceComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Models\Category;
use App\Models\Media;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);
Route::get('shop', ShopComponent::class);
Route::get('cart', CartComponent::class);
Route::get('checkout', CheckoutComponent::class);

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');

    //CRUD Category
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');

    //CRUD Service
    Route::get('/admin/services', AdminServiceComponent::class)->name('admin.services');
    Route::get('/admin/service/add', AdminAddServiceComponent::class)->name('admin.addservice');
    Route::get('/admin/service/edit/{id}', AdminEditServiceComponent::class)->name('admin.editservice');

});

Route::get('/service/{id}', function ($id) {
    $service = Service::with('category', 'media')->find($id);
    return response()->json($service, 200);
});

Route::get('/category/{id}', function ($id) {
    $category = Category::with('service')->find($id);
    return response()->json($category, 200);
});

Route::get('/media/{id}', function ($id) {
    $media = Media::with('service')->find($id);
    return response()->json($media, 200);
});
