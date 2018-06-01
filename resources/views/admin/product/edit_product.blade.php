@extends('layouts.admin')

@section('content')
	<div class="content-wrapper">
        <div class="box">
            <div class="content">
                <div class="col-md-12">
					<form class="form" action="{{route('product.update_save',$product->id)}}" method="post">
						<div class="col-sm-12">
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
								<label>Item-Name:</label><input type="text" class="form-control" name="pro_name" value="{{$product->pro_name}}">
								</p>
								<p>
								<label>Quenity:</label><input type="number" class="form-control"
								name="qty" value="{{$product->qty}}">
								</p>
								<p>
								<label>Price:</label><input type="text" class="form-control"
								name="price" value="{{$product->price}}">
								</p>
							</div>
							<div class="col-sm-6">
								<p>
								<label>Amount :</label><input type="text" class="form-control"
								name="amount" value="{{$product->amount}}">
								</p>
								<p>
								<label>Description:</label>
								<textarea class="form-control" name="description">{{$product->description}}</textarea>
								</p>
							</div>
							<div class="col-sm-12">
							 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
							</div>
						</div>
					</form>
                </div><!-- col-md-12 -->
            </div><!-- content -->
        </div><!-- box -->
    </div><!-- content-wrapper -->		
@endsection
