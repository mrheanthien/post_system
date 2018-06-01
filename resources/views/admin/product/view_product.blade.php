@extends('layouts.admin')

@section('content')
	<div class="content-wrapper">
        <div class="box">
            <div class="content">
                <div class="col-md-12">
					<div class="col-sm-12" style="margin:20px 0;">
						<a href="{{route('product.insert')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
					<table class="table table-bordered table-striped" id="datatable">
						<thead>
							<th>ID</th>
							<th>Item Name</th>
							<th>Quenity</th>
							<th>Price</th>
							<th>Amount</th>
							<th>Description</th>
							<th>Image</th>
							<th>Create at</th>
							<th>Update at</th>
							<th>Action</th>
						</thead>
						<tbody>
						@foreach($product as $key =>$value)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$value->pro_name}}</td>
								<td>{{$value->qty}}</td>
								<td>{{$value->price}}</td>
								<td>{{$value->amount}}</td>
								<td>{{$value->description}}</td>
								<td><img src="images/{{$value->image}}" style="width:50px;"></td>
								<td>{{$value->created_at}}</td>
								<td>{{$value->updated_at}}</td>
								<td>
									<a href="{{route('product.delete',$value->id)}}"><i class="fa fa-trash" onClick="return confirm('Do you want to delete?')" style="color: black;"></i><a> <a href="{{route('product.update',$value->id)}}" onClick="return confirm('Do you want to Update?')"><i class="fa fa-edit" style="color: black;"></i></a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
                    <?php /*{{$product->render()}} */ ?>
                </div><!-- col-md-12 -->
            </div><!-- content -->
        </div><!-- box -->
    </div><!-- content-wrapper -->		
@endsection
