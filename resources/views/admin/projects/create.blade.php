@extends('layouts.admin')

@section('content')
    <form class="" class="p-4" action="{{ route('admin.projects.store') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <!-- /resources/views/post/create.blade.php -->

        <h1>Create Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Create Post Form -->

        <div class="mb-3">{{-- name section --}}
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name"
                class="form-control @error('name') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="nameHelper" value="{{ old('name') }}">
            <small id="nameHelper" class="text-muted">insert here project name</small>
            @error('name')
                <div class="alert alert-primary" role="alert">
                    <strong>ERROR </strong>{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">{{-- description section --}}
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description"
                class="form-control @error('description') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="descriptionHelper">{{ old('description') }}
            </textarea>
            <small id="descriptionHelper" class="text-muted">insert here project description</small>
            @error('description')
                <div class="alert alert-primary" role="alert">
                    <strong>ERROR </strong>{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">{{-- source_code section --}}
            <label for="source_code" class="form-label">Source code</label>
            <textarea type="text" name="source_code" id="source_code"
                class="form-control @error('source_code') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="source_codeHelper">{{ old('source_code') }}
            </textarea>
            <small id="source_codeHelper" class="text-muted">insert here project source code link</small>
            @error('source_code')
                <div class="alert alert-primary" role="alert">
                    <strong>ERROR </strong>{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">{{-- site_link section --}}
            <label for="site_link" class="form-label">Site link</label>
            <textarea type="text" name="site_link" id="site_link"
                class="form-control @error('site_link') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="site_linkHelper">{{ old('site_link') }}
            </textarea>
            <small id="site_linkHelper" class="text-muted">insert here project link site</small>
            @error('site_link')
                <div class="alert alert-primary" role="alert">
                    <strong>ERROR </strong>{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">{{-- cover_image section --}}
            <label for="cover_image" class="form-label">Cover image</label>
            <textarea type="text" name="cover_image" id="cover_image"
                class="form-control @error('cover_image') is-invalid          
                @enderror" placeholder="type here"
                aria-describedby="cover_imageHelper">{{ old('cover_image') }}
            </textarea>
            <small id="cover_imageHelper" class="text-muted">insert here project cover image</small>
            @error('cover_image')
                <div class="alert alert-primary" role="alert">
                    <strong>ERROR </strong>{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">{{-- type section --}}
            <label for="type_id" class="form-label">Types</label>
            <select class="form-select @error('type_id') is invalid @enderror" name="type_id" id="type_id">
                <option value="">Select a type</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == old('type_id', '') ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class='form-group'>
            <p>Seleziona i tag:</p>
            @foreach ($technologies as $technology)
                <div class="form-check @error('technologies') is-invalid @enderror">
                    <label class='form-check-label'>
                        <input name='technologies[]' type='checkbox' value='{{ $technology->id }}' class='form-check-input'
                            {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                        {{ $technology->name }}
                    </label>
                </div>
            @endforeach
            @error('tags')
                <div class='invalid-feedback'>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">save</button>
    </form>
@endsection
