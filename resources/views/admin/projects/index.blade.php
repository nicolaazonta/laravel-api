@extends('layouts.admin')

@section('content')
<h2 class="py-3 text-uppercase fw-bolder" >my projects</h2>
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
                    <th>ACTIONS</th>

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
                        <td>
                            <a class="btn btn-info m-1" href="{{ route('admin.projects.show', $project->id) }}" title="View"><i class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-info m-1" href="{{ route('admin.projects.show', $project->id) }}" title="View"><i class="fa-solid fa-pencil"></i></a>
                            <a class="btn btn-danger m-1" href="{{ route('admin.projects.show', $project->id) }}" title="View"><i class="fa-solid fa-trash"></i></a>
                            
                        </td>
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
