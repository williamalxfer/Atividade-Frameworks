@extends('admin/base')
@section('title', 'Criar novo POSTS')

@section('content')
	<h1>Novo Post</h1>

	<form method="post" action="{{url('admin/posts')}}">
		@csrf
		{!! csrf_field() !!}
		<label>Título</label>
		<input type="text" name="titulo">

		<label>Descrição</label>
		<textarea name='descricao'></textarea>

		<input type="submit" value="Cadastrar">
	</form>
@endsection
