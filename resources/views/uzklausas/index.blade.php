@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">

<div class="card-body">
    <table class="table">
        <tr>
            <th>Puslapis</th>
            <th>Vardas</th>
            <th>Tel. nr.</th>
            <th>El. paštas</th>
            <th>Užklausa</th>
        </tr>
        @foreach ($uzklausas as $uzklausa)
        <tr>
            <td>{{ $uzklausa->page }}</td>
            <td>{{ $uzklausa->name }}</td>
            <td>{{ $uzklausa->phone }}</td>
            <td>{{ $uzklausa->email }}</td>
            <td>{{ $uzklausa->request }}</td>
        </tr>
        @endforeach
    </table>
    </div>
    <div class="form-group row" style="float: right; margin-right:2px;">
        <a href="/bandomoji-forma" class="btn btn-primary">Apklausa</a>
    </div>
</div>
@endsection