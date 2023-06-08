@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf

        <div class="mb-3">{{-- name section --}}
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name"
                class="form-control @error('name') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="nameHelper" value="{{ old('name') }}">
            <small id="nameHelper" class="text-muted">insert here project name</small>
        </div>
        <div class="mb-3">{{-- description section --}}
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description"
                class="form-control @error('description') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="descriptionHelper">{{ old('description') }}
            </textarea>
            <small id="descriptionHelper" class="text-muted">insert here project description</small>
        </div>
        <div class="mb-3">{{-- color_palette section --}}
            <label for="color_palette" class="form-label">Color palette</label>
            <textarea type="text" name="color_palette" id="color_palette"
                class="form-control @error('color_palette') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="color_paletteHelper">{{ old('color_palette') }}
            </textarea>
            <small id="color_paletteHelper" class="text-muted">insert here project color palette</small>
        </div>
        <div class="mb-3">{{-- jumbo_image section --}}
            <label for="jumbo_image" class="form-label">Jumbo image</label>
            <textarea type="text" name="jumbo_image" id="jumbo_image"
                class="form-control @error('jumbo_image') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="jumbo_imageHelper">{{ old('jumbo_image') }}
            </textarea>
            <small id="jumbo_imageHelper" class="text-muted">insert here project jumbo image</small>
        </div>
        <button type="submit" class="btn btn-primary">save</button>
    </form>
@endsection
