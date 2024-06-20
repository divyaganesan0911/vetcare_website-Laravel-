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
                    <span></span> Edit Coupon
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
                                  Edit Coupon
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.coupons')}}" class="btn btn-success float-end">All Coupons</a>
                                </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                               <form wire:submit.prevent="updateCoupon">
                                <div class="md-3 mt-3">
                                    <label for="name" class="form-label">Coupon Code</label>
                                    <input type="text" name="name"class="form-control" placeholder="Enter Coupon code" wire:model="code"  />
                                    @error('code')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                 <div class="md-3 mt-3">
                                    <label for="name" class="form-label">Coupon Type</label>
                                    <select class="form-control" wire:model="type">
                                        <option value= "">Select</option>
                                        <option value= "fixed">Fixed</option>
                                        <option value= "percent">percent</option>
                                    </select>
                                    @error('type')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="md-3 mt-3">
                                    <label for="slug" class="form-label">Coupon Value</label>
                                    <input type="text" name="Coupon Value" class="form-control" placeholder="Enter category slug" wire:model="value">
                                    @error('value')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                 <div class="md-3 mt-3">
                                    <label for="slug" class="form-label">Cart Value</label>
                                    <input type="text" name="Cart Value" class="form-control" placeholder="Enter category slug" wire:model="cart_value">
                                    @error('cart_value')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="md-3 mt-3" wire:ignore>
                                    <label for="slug" class="form-label">Expiry Date</label>
                                    <input type="date" name="Expiry Date" id="expiry_date"class="form-control" placeholder="Enter Expiry Date" wire:model="expiry_date">
                                    @error('expiry_date')
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

@push('scripts')
    <script>
    $(function(){
        $('#expiry_date')-datetimepicker({

            format:"Y-MM-DD"
    })
    .on('dp.change',function(ev){
        var data = $('#expiry_date').val();
        @this.set('expiry_daate',data);

        
    });
    });
    </script>
@endpush