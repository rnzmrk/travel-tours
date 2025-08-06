@extends('layouts.guest')

@section('content')

    <x-career-header>
        <div class="p-5">
            <h4>HELLO, GUEST!</h4>
            <div class="row">
                <div class="col-6">
                    <h3 class="text-secondary ps-2 fw-light">Welcome to Travel Jetlouge Careers!</h3>
                </div>
                <div class="col-6">
                    <form class="d-flex" role="search">
                        <div class="input-group shadow-sm rounded-pill overflow-hidden">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="search" class="form-control border-start-0 me-2" placeholder="Search" aria-label="Search">
                        </div>
                        <button class="btn border rounded" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-3">
                <select class="form-select shadow-sm rounded-3 text-muted">
                    <option selected disabled>Salary Range</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select shadow-sm rounded-3 w-100 text-muted">
                    <option selected disabled>Select Job Title</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select shadow-sm rounded-3 text-muted">
                    <option selected disabled>Work Style</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select shadow-sm rounded-3 text-muted">
                    <option selected disabled>Work Style</option>
                </select>
            </div>
        </div>
    </x-career-header>

<main class="p-3">
    <div>
        <p class="text-secondary">Careers</p>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow rounded-3 px-3" style="width: 26rem; height: 200px;">
                <div class="card-body">
                    <div class="py-1">
                        <h3 class="card-title text-muted">Designer</h3>
                        <h6 class="card-subtitle mb-2 text-muted pt-1">Be one of our designers!</h6>
                    </div>
                    <div class="d-flex align-items-center gap-3 pt-5">
                        <small class="text-secondary border rounded p-1" style="background-color: #d5deef;">Pampanga</small>
                        <small class="text-secondary border rounded p-1" style="background-color: #d5deef;">$200 - 300k Salary</small>
                        <small class="text-secondary border rounded p-1" style="background-color: #d5deef;">Remote Setup</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
