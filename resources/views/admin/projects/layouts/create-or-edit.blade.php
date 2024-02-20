@extends('layouts.admin')

@section('head-title')
    @yield('page-title')
@endsection

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                @include('partials.errors')

                <form action="@yield('form-action')" method="POST">
                    @csrf
                    @yield('form-method')
                        {{-- ID_client --}}
                        <div class="mb-3 input-group">
                            <label for="ID_client" class="input-group-text">ID Client</label>
                            <input class="form-control" type="number" name="ID_client" id="ID_client" value="{{ old('ID_client',$project->client_id) }}">
                        </div>
                        {{-- Name Project: --}}
                        <div class="mb-3 input-group">
                            <label for="name" class="input-group-text">Name Project:</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $project->name) }}">
                        </div>
                        {{-- Type: --}}
                        <div class="mb-3 input-group">  
                            <label for="status" class="input-group-text">Type:</label>
                            <select class="form-select" type="text" name="type_id" id="type_id" >
                                @foreach ($types as $type)
                                    <option value="{{ old('type_id',$type->id ) }}"
                                        style="color: {{ $type->color }}" {{ $type->id == old('type_id', $type->type_id) ? 'selected' : '' }}>
                                            {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- status: --}}
                        <div class="mb-3 input-group">
                            <label for="status" class="input-group-text">Status:</label>
                            <select class="form-select" aria-label="Default select example" name="status" id="status" value="{{ old('status') }}" >
                                <option selected class="text-capitalize">{{ $project->status }}</option>
                                <option value="off">Off</option>
                                <option value="blocked">Blocked</option>
                                <option value="hold">Hold</option>
                                <option value="ready">Ready</option>
                                <option value="done">Done</option>
                            </select>
                        </div>
                        {{-- Technologies --}}
                        <div class="mb-3 input-group">
                            <div>
                                @foreach ($technologies as $technology)
                                    <input class="form-check-input" type="checkbox" name="technologies[]" id="{{ $technology->id }}" value="{{ $technology->id }}"
                                    {{-- ? se il tag su cui sto ciclando e' presente nei tag che ho inviato e ora voglio rivedere come errore, selezionalo, se invece non ho avuto alcun errore, cercalo all'interno della lista dei tag presenti nel mio project --}}
                                    {{ in_array( $technology->id, old('technologies', $project->technologies->pluck('id')->toArray())) ? 'checked' : '' }}> 
                                    <label for="technologies-{{ $technology->id }}"> {{ $technology->name }}</label>
                                @endforeach
                            </div>
                        </div>
                        {{-- Start Date: --}}
                        <div class="mb-3 input-group">
                            <label for="start_date" class="input-group-text">Start Date:</label>
                            <input class="form-control" type="date" name="start_date" id="start_date" value="{{ old('start_date',$project->start_date) }}">
                        </div>
                        {{-- End Date: --}}
                        <div class="mb-3 input-group">
                            <label for="end_date" class="input-group-text">End Date:</label>
                            <input class="form-control" type="date" name="end_date" id="end_date" value="{{ old('end_date',$project->end_date) }}">
                        </div>
                        {{-- Budget --}}
                        <div class="mb-3 input-group">
                            <label for="budget" class="input-group-text">Budget:</label>
                            <input class="form-control" type="number" name="budget" id="budget" value="{{ old('budget',$project->budget) }}">
                        </div>
                        {{-- project image url: --}}
                        <div class="mb-3 input-group">
                            <label for="view" class="input-group-text">project image url:</label>
                            <input class="form-control" type="text" name="view" id="view" value="{{ old('view',$project->view) }}">
                        </div>
                        {{--Priority: --}}
                        <div class="mb-3 input-group">
                            <label for="priority" class="input-group-text">Priority:</label>
                            <select class="form-select" aria-label="Default select example" name="priority" id="priority" value="{{ old('priority') }}" >
                                <option selected class="text-capitalize">{{ $project->priority }}</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>
                        {{-- Description --}}
                        <div class="mb-3 input-group">
                            <label for="description" class="input-group-text">Project content:</label>
                            <textarea class="form-control"  name="description" id="description" cols="30" rows="10">{{ old('description',$project->description)  }}</textarea>
                        </div>
                                {{-- Buttons --}}
                        <div class="mb-3 input-group">
                            <button type="submit" class="btn btn-xl btn-primary">
                                @yield('page-title')
                            </button>
                            <button type="reset" class="btn btn-xl btn-warning">
                                Reset all fields
                            </button>
                        </div>
                        

                </form>
            </div>
        </div>
    </div>
    {{-- Script --}}
    <script>
        document.getElementById('view').addEventListener('change', function(event){
            const imageElement = document.getElementById('image-preview');
            imageElement.setAttribute('src' , this.value);
            imageElement.classList.remove('d-none');
        });
    </script>
@endsection