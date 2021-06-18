@extends('layouts.app')
@section('content')
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
@endsection