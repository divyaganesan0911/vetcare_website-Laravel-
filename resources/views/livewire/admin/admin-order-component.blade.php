<div>
<style>
nav svg{
    height:20px;
}
nav .hidden{
    display : block !important;

}
</style>
 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Vet Hub</a>                    
                    <span></span> All Orders
                </div>
            </div>
        </div>
     <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel.panel-default">
                    <div class="panel-heading">
                        All Orders

                    </div>
                    <div class="pannel-body">
                     @if(Session::has('order_message'))
                     <div class="alert alert-success" role="alert">
                     {{Session::get('order_message')}}
                     </div>
                     @endif
                    <div class="table-responsive">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                <th>Order ID</th>
                                <th>Subtotal</th>
                                <th>Discount</th>
                                <th>Tax</th>
                                <th>Total</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Zipcode</th>
                                <th>Status</th>
                                <th>Order Date</th>
                                <th colspan="2" class="text-center">Action</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{($order->id)}}</td>
                                        <td>Rs.{{($order->subtotal)}}</td>
                                        <td>Rs.{{($order->discount)}}</td>
                                        <td>Rs.{{($order->tax)}}</td>
                                        <td>Rs.{{($order->total)}}</td>
                                        <td>{{($order->firstname)}}</td>
                                        <td>{{($order->lastname)}}</td>
                                        <td>{{($order->mobile)}}</td>
                                        <td>{{($order->email)}}</td>
                                        <td>{{($order->zipcode)}}</td>
                                        <td>{{($order->status)}}</td>
                                        <td>{{($order->created_at)}}</td>
                                        <td><a href="{{route('admin.orderdetail',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Details</td>
                                        {{-- <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Delivered</a></li>
                                                        <li><a href="#">Canceled</a></li>
                                                    </ul>
                                            </div>
                                        </td> --}}
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status
                                                <span class="caret"></span></button> 
                                               <ul    class="dropdown-menu">
                                                    <li><a href="#" wire:click.prevent="updateOrderStaus({{$order->id}},'delivered')">Delivered</a></li>
                                                    <li><a href="#"wire:click.prevent="updateOrderStaus({{$order->id}},'canceled')">Cancelled</a></li>
                                                </ul>
                                            </div>
                                        </td>
                       

                                    </tr>

                                @endforeach
                            </tbody>

                        </table>
                        {{$orders->links()}}
                    </div>
                </div>

            </div>


        </div>
    </div>

</div>

