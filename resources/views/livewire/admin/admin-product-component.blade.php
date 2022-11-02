<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>    
    <div class="container" style="padding: 30px 0;">
        <div clss="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Products
                    </div>
                    <div clas="panel-body">
                        <table class="table table-sriped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60" /></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->discount}}</td>
                                    <td>{{$product->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>    
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>