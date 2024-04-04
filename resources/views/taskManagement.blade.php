@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <h4>Name</h4>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h4>Department</h4>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h4>Difficulty</h4>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h4>Priority</h4>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h4>Task assign</h4>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h4>Status</h4>
                            </div>
                        </div>
                    </div>

                      <!-- Card body placed below the card header -->
                      <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($tasks as $task)
                        <div class="row">

                            <div class="col-md-2 col-sm-4">
                                <p>{{ $task->Name }}</p>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <p>{{ $task->Department }}</p>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <p>{{ $task->Difficulty }}</p>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <p>{{ $task->Priority }}</p>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <p>{{ $task->TaskAssign }}</p>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <p>{{ $task->Status }}</p>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                    <!-- End of card body -->
                </div>
            </div>
        </div>
    </div>
@endsection
