<x-app-layout>
<!DOCTYPE html>
<html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Product List</title>
  </head>
<body>

	
	<div class="container">

		<table class="table">
			<tr>
				<th>Make</th>
				<th>Model</th>
				<th>Processor</th>
				<th>Action</th>
			</tr>
			@foreach($products as $product)
				<tr>
				<td>{{$product->make_name}}</td>
				<td>{{$product->model_name}}</td>
				<td>{{$product->processor_name}}</td>
				<td>
				@if(Auth::user()->role==1)
				 <a href="product-delete/{{$product->id}}">Delete</a>
				@endif
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	  <div class="toast-header">
	    <img src="..." class="rounded me-2" alt="...">
	    <strong class="me-auto">Action</strong>
	    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
	  </div>
	  <div class="toast-body">
	    {{session('msg')}}
	  </div>
	</div>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>

</x-app-layout>