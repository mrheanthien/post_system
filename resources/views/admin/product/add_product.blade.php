@extends('layouts.admin')

@section('content')
	<div class="content-wrapper">
        <div class="box">
            <div class="content">
                <div class="col-sm-12">
                    <div class="col-sm-12"><h3>Enty Infomaton Product</h3></div>
                    <div class="col-sm-12"><hr></div>
					<form class="form" action="{{route('product.save')}}" method="post" enctype="multipart/form-data">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{ csrf_field() }}
                        <div class="col-sm-6">
                            <p>
                            <label>Item-Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                                <input type="text" class="form-control" name="pro_name" placeholder="Product Name...">
                            </div>
                            </p><p>
                            <label>Quanity</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-laptop"></i></span>
                                <input type="number" class="form-control"
                            name="qty" placeholder="Quenity..." id="inputSuccess">
                            </div>
                            </p><p>
                             <label>Price</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                            <input type="text" class="form-control"
                            name="price" placeholder="Price...">
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p>
                            <label>Amount</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" class="form-control"
                                name="amount" placeholder="Amount...">
                            </div>
                            </p>
                            <p>
                            <div class="text-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Description..."></textarea>
                            </div>
                            </p>
                            <p>
                            <div class="text-group">
                                <label>Upload Image</label>
                                <input type="file" name="image" class="btn btn-primary">
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-12"><hr></div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                        </div>
					</form>
                </div><!-- col-md-12 -->
            </div><!-- content -->
        </div><!-- box -->
    </div><!-- content-wrapper -->		
@endsection
