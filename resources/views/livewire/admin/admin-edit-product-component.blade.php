<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Vet Hub</a>
                    <span></span> Edit Product
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="cart-header">
                                <div class="col-md-6">
                                   Edit Product
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.products')}}" class="btn btn-success float-end">All Products</a>
                                </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                               <form wire:submit.prevent="updateProduct">
                                <div class="md-3 mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name"class="form-control" placeholder="Enter product name" wire:model="name" wire:keyup="generateSlug"/>
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Enter  slug" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea name="short_description" class="form-control" placeholder="Enter Short Description" wire:model="short_description"></textarea>
                                    @error('short_description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="regular_price" class="form-label">Regular Price</label>
                                    <input type="text" name="regular_price" class="form-control" placeholder="Enter  Regular price" wire:model="regular_price">
                                    @error('regular_price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="sale_price" class="form-label">Sale Price</label>
                                    <input type="text" name="sale_price" class="form-control" placeholder="Enter  Sale price" wire:model="sale_price">
                                    @error('sale_price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="sku" class="form-label">SKU</label>
                                    <input type="text" name="sku" class="form-control" placeholder="Enter  SKU" wire:model="sku">
                                    @error('sku')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="stock_status" class="form-label" >Stock Status</label>
                                        <select name="stock_status" class="form-control" wire:model="stock_status">
                                                <option value="instock">Instock</option>
                                                <option value="outofstock">Out of Stock</option>
                                        </select>
                                    @error('stock_status')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="featured" class="form-label" > Featured</label>
                                        <select name="featured" class="form-control" wire:model="featured">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                        </select>
                                    @error('featured')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="text" name="quantity" class="form-control" placeholder="Enter product Quantity" wire:model="quantity">
                                    @error('quantity')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="image" class="form-label" >Image</label>
                                    <input type="file" name="image" class="form-control" wire:model="newimage" />
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120" alt="">
                                        @else
                                        <img src="{{asset('assets/imgs/products/')}}/{{$image}}" width="120" alt="">
                                        @endif
                                    @error('newimage')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="category_id" class="form-label">Category</label>
                                        <select name="category_id" class="form-control" wire:model="category_id" >
                                                <option value="0">Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                        </select>
                                    @error('category_id')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Update</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
