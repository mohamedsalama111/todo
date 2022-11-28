@extends('layouts.app')
@section('title' , 'All todos')
@section('content')
<div class="container">
    <div class="row pt-3 justify-content-center">
        <div class="card" style="width: 50%">
            <div class="card-header text-center">
                <h1>All Todos</h1>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            <div class="card-body">
                <ul class="list-group">
                    @forelse($todos as $todo)
                        <li class="list-group-item text-muted">
                            {{ $todo-> title }}
                            <span class="float-end">
                                    <a href="/todos/{{$todo->id}}/delete" style=" color:#ec1a0d">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                            </span>

                            <span class="float-end">
                                    <a href="/todos/{{$todo->id}}/edit" style=" color:#445c85">
                                        <i class="fa fa-pencil-square-o me-2" aria-hidden="true"></i>
                                    </a>
                            </span>

                            <span class="float-end">
                                    <a href="/todos/{{$todo -> id}}" style=" color:#0abace">
                                        <i class="fa fa-eye me-2" aria-hidden="true"></i>
                                    </a>
                            </span>
                            @if(!$todo->completed)
                                <span class="float-end">
                                        <a href="/todos/{{$todo -> id}}/complete" style=" color:#ff9800">
                                            <i class="fa fa-check-square me-2" aria-hidden="true"></i>
                                        </a>
                                </span>
                            @endif
                        </li>
                    @empty
                        <h3 style="color: darkred"><center>No Todos :)</center></h3>
                    @endforelse
                </ul>
            </div>
{{--            <div class="form-group text-center mb-3">--}}
{{--                <a--}}
{{--                    href="create"--}}
{{--                    class="btn btn-info"--}}
{{--                    role="button"--}}
{{--                    style="width: 50% ; background-color: #445C85FF; color: White;">--}}
{{--                    New Todo--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
    @endsection
