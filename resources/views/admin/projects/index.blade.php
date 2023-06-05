@extends('layouts.admin')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-bordered
    table-dark
    align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>SLUG</th>
                    <th>NAME</th>
                    <th>PALETTE</th>
                    <th>JUMBO</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($projects as $project)
                    <tr class="table-primary">
                        <td scope="row">{{ $project->id }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->name }}</td>
                        <td><img height="50px" src="{{ $project->color_palette }}" alt=""></td>
                        <td><img height="100px" src="{{ $project->jumbo_image }}" alt=""></td>
                    </tr>
                @empty
                    <tr>no projects yet</tr>
                @endforelse
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
@endsection
