@extends('layouts.guest')

@section('content')
    <x-career-header />

    <main class="p-3">

        <div class="text-secondary">
            <p>Careers / Career Info</p>
        </div>

        <div class="container shadow border rounded bg-body-tertiary p-5">
            <div class="text-secondary">
                <h2>Job Title</h2>
                <p>Designer</p>
            </div>

            <div class="text-secondary">
                <h2>Job Title</h2>
                <p>Description</p>
            </div>

            <div class="text-secondary">
                <h2>Job Details</h2>
                <ul>
                    <li>Salary</li>
                </ul>
            </div>

            <div class="text-secondary">
                <h2>Location</h2>
                <p>Quezon City</p>
            </div>

            <div class="text-secondary">
                <h2>Skill Requirement</h2>
                <ul>
                    <li>Have a background in designing</li>
                </ul>
            </div>

            <div class="text-center">
                <button @class(['btn btn-primary'])>Apply now</button>
            </div>
        </div>
    </main>
@endsection
