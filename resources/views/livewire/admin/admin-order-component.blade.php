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
                        All Orders

                    </div>
                    <div class="pannel-body">
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
                                <th>Action</th>
                                
                                
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

