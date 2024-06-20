<div>
    {{-- <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style> --}}
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Vet Hub</a>
                    <span></span> All Coupons
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="cart-header">
                                <div class="row">
                                    <div class="col-md-6">
                                            All Coupons
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.addcoupon')}}" class="btn btn-success float-end">Add New Coupon</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Coupon Code</th>
                                            <th>Coupon Type</th>
                                            <th>Coupon Value</th>
                                            <th>Cart Value</th>
                                             <th>Expiry Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @php
                                        $i=($coupons->currentPage()-1)*$couponss->perPage();
                                        @endphp --}}
                                    @foreach($coupons as $coupon)
                                    <tr>
                                     {{-- <td>{{++$i}}</td> --}}
                                        {{-- <td><img src="{{asset('assets/imgs//categories')}}/{{$category->image}}" width="120" alt=""></td> --}}
                                        <td>{{$coupon->id}}</td>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->type}}
                                            @if($coupon->type == 'fixed')
                                                <td>Rs.{{$coupon->value}}</td>
                                            @else
                                                <td>{{$coupon->value}}%</td>
                                            @endif
                                        {{-- <td>{{$coupon->value}}</td> --}}
                                        <td>{{$coupon->cart_value}}</td>
                                        <td>{{$coupon->expiry_date}}</td>
                                        <td>
                                            <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" class="text-info">Edit</a>
                                            <a href="#" class="text-danger" onclick="deleteConfirmation({{$coupon->id}})" style="margin-left:20px">Delete</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{-- {{$categories->links()}} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body pb-30 pt-30">
            <div class="row">
                <div class="col-md-12 text-center">
                        <h4 class="pb-3">Do you want to Delete this Coupon?</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteCoupon()">Delete</button>

                </div>
            </div>
        </div>
        </div>
    </div> 
</div>
@push('scripts')
<script>
    function deleteConfirmation(id)
    {
        @this.set('coupon_id',id);
        $('#deleteConfirmation').modal('show');
    }
    function deleteCoupon()
    {
        @this.call('deleteCoupon');
        $('#deleteConfirmation').modal('hide');

    }
</script>
@endpush