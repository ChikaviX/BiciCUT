@foreach($products as $product)
	<h1>
		{{$product->title}}
	</h1>
	<p>{{$product->pricing}}</p>
@endforeach