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
                    <span></span> Edit Category
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
                                    Edit Category
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.categories')}}" class="btn btn-success float-end">All Categories</a>
                                </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                               <form wire:submit.prevent="updateCategory">
                                <div class="md-3 mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name"class="form-control" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug"/>
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="name" class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Enter category name" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="md-3 mt-3">
                                    <label for="newimage" class="form-label">Image</label>
                                        <input type="file" class="form-control"  wire:model="newimage"/>
                                    @error('newimage')  
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width="120" alt="">
                                    @else
                                    <img src="{{asset('assets/imgs/categories')}}/{{$image}}" width="120" alt="">
                                    @endif
                                </div>

                                <div class="md-3 mt-3">
                                    <label for="is_popular" class="form-label">Popular</label>
                                        <select name="is_popular" id="form-control" wire:model="is_popular"> 
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    @error('is_popular')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Submit</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
