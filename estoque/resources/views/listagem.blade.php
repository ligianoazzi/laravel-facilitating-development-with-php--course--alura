@extends('principal')

@section('conteudo')

@if(empty($produtos))
		<div>Não exists products </div>

@else
		<h1>Product List</h1>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Value</th>
				<th>Description</th>
				<th>Quantity</th>
			</tr>


	@foreach($produtos as $p) 
			<tr class="{{ $p->quantidade <=1 ? 'alert-danger' : '' }}">
				<td> {{ $p->nome }} </td>
				<td> {{ $p->valor }} </td>
				<td> {{ $p->descricao }} </td>
				<td> {{ $p->quantidade }} </td>
				<td>
					<a href="/produtos/mostra/<?= $p->id ?>">
						<span class="glyphicon glyphicon-search" aria-hidden="true">details</span>
					</a>
				</td>
			</tr>			
	@endforeach

		</table>
@endif

@endsection
