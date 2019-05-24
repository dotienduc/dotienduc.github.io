@foreach($products as $key => $item)
	<tr>
		<td>{{ $item->name }}</td>
		<td><img src="{{ url('img/product/'.$item->image.'') }}" width="50" height="50"></td> 
		<td>{{ number_format($item->unit_price) }} VND</td>
		<td>{{ number_format($item->promotion) }} VND</td>
		<td>
			@if($item->status == 1)
			<span class="label label-primary"><i class="fa fa-eye" aria-hidden="true"></i></span>
			@else
			<span class="label label-danger"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
			@endif
		</td>
		<td>
			<a href="{{ route('products.edit', ['id' => $item->id]) }}"><button class="btn btn-primary" ><i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
			<a href="{{ route('products.delete', ['id' => $item->id]) }}"><button class="btn btn-danger" onclick="return confirm('Are you sure ?');"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
		</td>
	</tr>
	@endforeach