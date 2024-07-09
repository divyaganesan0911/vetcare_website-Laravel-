<?php
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSlideComponent;
use App\Http\Livewire\Admin\AdminEditHomeSlideComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;



use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\VetSchemesComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home.index');

Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');

Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');

Route::get('/contact-us',ContactComponent::class)->name('contact');

Route::get('/about',AboutComponent::class)->name('about');
Route::get('/vetschemes',VetSchemesComponent::class)->name('vetschemes');
  






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/orders',UserOrdersComponent::class)->name('users.orders');
    Route::get('/user/orders/{order_id}',UserOrderDetailsComponent::class)->name('users.orderdetails');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('/admin/slider/add',AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');
    Route::get('/admin/slider/edit{slide_id}',AdminEditHomeSlideComponent::class)->name('admin.home.slide.edit');
    Route::get('/admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('/admin/coupon/add',AdminAddCouponComponent::class)->name('admin.addcoupon');
    Route::get('/admin/coupon/edit/{coupon_id}',AdminEditCouponComponent::class)->name('admin.editcoupon');
    Route::get('/admin/contact-us',AdminContactComponent::class)->name('admin.contact');
    Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetail');
});


require __DIR__.'/auth.php';
