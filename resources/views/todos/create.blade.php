@extends('layouts.app')
@section('title' , 'Create Todo')

@section('content')
    <div class="container mt-5">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                       <h1> <center>Create A New Todo</center> </h1>
                    </div>
                    <div class="card-body">
{{--                        @if($errors ->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach($errors->all() as $error)--}}
{{--                                        <li>{{$error}}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <form action="/create" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Todo Title"
                                name="todoTitle"
                                class = "@error('todoTitle') is-invalid @enderror "
                                value="{{old('todoTitle')}}">
                            </div>
                            @error('todoTitle')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter Description For Your Todo"
                                    name="todoDescription"
                                    class = "@error('todoDescription') is-invalid @enderror "></textarea>
                            </div>
                            @error('todoDescription')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group text-center">
                                <button
                                    type="submit"
                                    class="btn btn-success"
                                    style="width: 50%">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
