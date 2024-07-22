<div>
    <div class="container" style="padding: 30px 0">
        <style> 
            nav svg{
                height:20px;
            }
            nav.hidden{
                display:block ;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Query Messages
                    </div>
                    <div class="panel-body" >
                     <table class ="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Category</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Weight</th>
                                    <th>Location</th>
                                    <th>Message</th>
                                    <th>Create At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                  $i = 1;
                                @endphp
                                    @foreach($queries as $query)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$query->name}}</td>
                                            <td>{{$query->email}}</td>
                                            <td>{{$query->phone}}</td>
                                            <td>{{$query->category}}</td>
                                            <td>{{$query->gender}}</td>
                                            <td>{{$query->age}}</td>
                                            <td>{{$query->weight}}</td>
                                            <td>{{$query->location}}</td>
                                            <td>{{$query->message}}</td>
                                            <td>{{$query->create_at}}</td>
                                        </tr>
                                    @endforeach
                            </tbody>
                    </table>
                        {{$queries->links()}}
                    </div>
                </div>
            </div>
        </div>
</div>


