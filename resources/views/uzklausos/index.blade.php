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
            <th>Veiksmai</th>
        </tr>
        @foreach ($uzklausos as $uzklausa)
        <tr>
            <td>{{ $uzklausa->page }}</td>
            <td>{{ $uzklausa->name }}</td>
            <td>{{ $uzklausa->phone }}</td>
            <td>{{ $uzklausa->email }}</td>
            <td>{{ $uzklausa->request }}</td>
            <td>
            {{-- <td>
                <form action={{ route('uzklausa.destroy', $uzklausa->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('uzklausa.edit', $uzklausa->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('uzklausa.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection