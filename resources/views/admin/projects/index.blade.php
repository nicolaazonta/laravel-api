@extends('layouts.admin')


@section('sidebar')
    <div class="card text-bg-warning m-3 rounded-3">{{-- types card --}}
        <div class="card-header">
            <h4 class="text-uppercase fw-bold">types</h4>
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($types as $type)
                <li class="list-group-item bg-transparent text-uppercase fw-bolder d-flex align-items-center justify-content-between">
                    {{ $type->name }}
                    <div>
                        <a href=""><i class="fa-solid fa-pencil fa-2x text-dark me-1" aria-hidden="true"></i></a>{{-- edit --}}


                        <a data-bs-toggle="modal"
                        data-bs-target="#modal-{{ $type->id }}" href=""><i class="fa-solid fa-trash fa-2x text-dark" aria-hidden="true"></i></a>{{-- delete --}}
                    </div>

                 {{--    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal"
                    data-bs-target="#modal-{{ $project->id }}">
                    delete
                </button> --}}

                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modal-{{ $type->id }}" tabindex="-1"
                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                    aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                        role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">attention</h5>
                            </div>
                            <div class="modal-body">
                                are u sure to delete this type?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>

                                <form action="{{ route('admin.types.destroy', $type->id) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
















                </li>
            @endforeach
            <div class="input-group">
                <input type="text" class="form-control" placeholder="new type" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-dark" type="button" id="button-addon2">add</button>
            </div>
        </ul>
    </div>


    <div class="card text-bg-info m-3 rounded-3">{{-- technologies card --}}
        <div class="card-header">
            <h4 class="text-uppercase fw-bold">technologies</h4>
        </div>

        <ul class="list-group list-group-flush">

            @foreach ($technologies as $technology)
                <li class="list-group-item bg-transparent  text-uppercase fw-bolder">
                    {{ $technology->name }}
                </li>
            @endforeach
            <div class="input-group">
                <input type="text" class="form-control" placeholder="new technology" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-dark" type="button" id="button-addon2">add</button>
            </div>
        </ul>
    </div>
@endsection



@section('content')
    <div class="card rounded-3 bg-dark text-white p-3 m-3">
        <h2 class="py-3 text-uppercase fw-bolder">my projects</h2>
        <a name="" id="" class="text-uppercase w-25 btn btn-warning rounded my-3"
            href="{{ route('admin.projects.create') }}" role="button"><i class="fa-solid fa-plus"></i> add a project</a>

        @if (session('message'))
            <div class="alert alert-warning" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif


        <div class="table-responsive">
            <table class="table table-striped
    table-hover	
    table-bordered
    align-middle">
                <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>SLUG</th>
                        <th>NAME</th>
                        <th>TYPE</th>
                        <th>TECHNOLOGY</th>
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
                            <td>{{ $project->type?->name }}</td>
                            <td>
                                @foreach ($project->Technologies as $technology)
                                    {{ $technology->name }}
                                @endforeach
                            </td>
                            <td><img height="50px" src="{{ $project->color_palette }}" alt=""></td>
                            <td><img height="100px" src="{{ $project->jumbo_image }}" alt=""></td>
                            <td>
                                <a class="btn btn-info m-1" href="{{ route('admin.projects.show', $project->id) }}"
                                    title="View">view</a>

                                <a class="btn btn-warning m-1" href="{{ route('admin.projects.edit', $project->id) }}"
                                    title="edit">edit</i></a>

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $project->id }}">
                                    delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modal-{{ $project->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">attention</h5>
                                            </div>
                                            <div class="modal-body">
                                                are u sure to delete this project?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Optional: Place to the bottom of scripts -->
                                <script>
                                    const myModal = new bootstrap.Modal(document.getElementById('modal-{{ $project->id }}'), options)
                                </script>


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
    </div>
@endsection



{{-- 
    
     <form action="{{    route('admin.projects.destroy', $project->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="btn btn-danger">confirm</button>
                                            </form>
    --}}
