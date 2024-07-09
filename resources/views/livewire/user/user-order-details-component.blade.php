 <div>
<style>
nav svg{
    height:20px;
}
nav .hidden{
    display : block !important;
}
</style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel.panel-default">
                    <div class="panel-heading">
                         Orders Items
                    </div>
                     
                    <div class="pannel-body">
                    <div class="table-responsive">
                         <br/>
                        <span>Product Name</span>
                        <br/>
                        <br/>
                                <table class="table shopping-summery text-center clean">
                                    <thead>
                                        <tr class="main-heading">
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->orderItems as $item)
                                            <tr>
                                                <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{$item->product->image}}"  alt="{{$item->product->name}}"></td>
                                                <td class="product-des product-name">
                                                    <h5 class="product-name">{{$item->product->name}}</a></h5>
                                                </td>
                                                <td class="price" data-title="Price"><span>Rs:{{$item->product->regular_price}}</span></td>
                                                <td class="text-center" data-title="Stock">
                                                <h5>{{$item->quantity}}</h5></td>
                                                <td class="text-right" data-title="Cart">
                                                    <span>Rs:{{$item->price * $item->quantity}} </span>
                                                </td>                                            
                                            </tr>
                                        @endforeach                                   
                                    </tbody>
                                </table>
                    </div>
                </div>
                <div class="summary">
                    <div class="order-summary">
                     <br/>
                     <span>Order Summary</span>
                     <br/>
                     <br/>
                    <table>
                        <tr>
                            <td class="cart_total_label">Subtotal</td>
                            <td class="cart_total_amount"><span class="cart_total_label">Rs:{{$order->subtotal}}</span></td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">Tax</td>
                            <td class="cart_total_amount"><span class="cart_total_label">Rs:{{$order->tax}}</span></td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">Shipping</td>
                            <td class="cart_total_amount"><span class="cart_total_label">Free Shipping</span></td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">Total</td>
                            <td class="cart_total_amount"><span class="cart_total_label">Rs:{{$order->total}}</span></td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <div class="panel.panel-default">
                    <div class="panel-heading">
                         Billing Items
                         <br/>

                    </div>
                    <div class="pannel-body">
                    <br/>
                    <table class="table">
                        <tr>
                            <th>First name</th>
                            <td>{{$order->firstname}}</td>
                            <th>Last Name</th>
                            <td>{{$order->lastname}}</td>
                        </tr>
                          <tr>
                            <th>Phone</th>
                            <td>{{$order->mobile}}</td>
                            <th>Email</th>
                            <td>{{$order->email}}</td>
                        </tr>
                          <tr>
                            <th>Line1</th>
                            <td>{{$order->line1}}</td>
                            <th>Line2</th>
                            <td>{{$order->line2}}</td>
                        </tr>
                          <tr>
                            <th>City</th>
                            <td>{{$order->city}}</td>
                            <th>Province</th>
                            <td>{{$order->province}}</td>
                        </tr>
                          <tr>
                            <th>Country</th>
                            <td>{{$order->country}}</td>
                            <th>Pincode</th>
                            <td>{{$order->zipcode}}</td>
                        </tr>
                    </table>
                    
                </div>

            </div>


        </div>
          {{-- <div class="row">
            <div class="col-md-12">
                <div class="panel.panel-default">
                    <div class="panel-heading">
                         Shipping Items

                    </div>
                    <div class="pannel-body">
                    
                </div>

            </div>


        </div>
          <div class="row">
            <div class="col-md-12">
                <div class="panel.panel-default">
                    <div class="panel-heading">
                         Transcation 
                    </div>
                    <div class="pannel-body">
                    
                </div>

            </div>


        </div> --}}
    </div>

</div>
