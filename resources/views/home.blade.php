@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <h4>Name</h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <h4>Department</h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <h4>Roles</h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <h4>Monitoring</h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <h4>Log Records</h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">+Add</button>
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

                        @foreach ($users as $user)
                        <div class="row">

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <p>{{ $user->name }}</p>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <p>{{ $user->department }}</p>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <p>{{ $user->roles }}</p>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <p>{{ $user->monitoring }}</p>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <p>{{ $user->logrecords }}</p>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <button class="btn btn-success m-2">update</button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">User Management</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-5">
                    <div class="mb-5 p-5 border shadow-lg">
                        <!-- Form starts here -->
                        <form>
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="firstname">Name:</label>
                                    <input id="firstname" name="name" type="text" />
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="department">Department:</label>
                                    <div class="input-group mb-3">
                                        <select id="department" name="department" class="form-select">
                                            <option selected>Choose...</option>
                                            <option value="Front-End Development Team">Front-End Development Team</option>
                                            <option value="Back-End Development Team">Back-End Development Team</option>
                                            <option value="Full-Stack Development Unit">Full-Stack Development Unit</option>
                                            <option value="Project Planning and Execution">Project Planning and Execution</option>
                                            <option value="Quality Assurance and Testing">Quality Assurance and Testing</option>
                                            <option value="Agile Development Team">Agile Development Team</option>
                                            <!-- Add options here -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="roles">Roles:</label>
                                    <div class="input-group mb-3">
                                        <select id="roles" name="roles" class="form-select">
                                            <option selected>Choose...</option>
                                            <option value="Project Manager">Project Manager</option>
                                            <option value="Front End">Front End</option>
                                            <option value="BackEnd">BackEnd</option>
                                            
                                            <!-- Add options here -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="monitoring">Monitoring:</label>
                                    <div class="input-group mb-3">
                                        <select id="monitoring" name="monitoring" class="form-select">
                                            <option selected>Pending</option>
                                            <option value="Done">Done</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!-- Form ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of modal -->
@endsection
