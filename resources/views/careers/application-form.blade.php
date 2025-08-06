@extends('layouts.guest')

@section('content')
    <x-career-header />

    <main class="p-5">
        <div class="container d-flex align-items-center justify-content-center">
            <form action="" class=" w-75">

                <div class="text-center">
                    <h3 class="text-secondary">Application Form</h3>
                    <p>Role:</p>
                </div>

                <div class="mb-3">
                    <x-input-label for="name" :value="__('Full Name')" />
                    <x-text-input type="text" id="name" name="name" required />
                </div>

                <div class="mb-3">
                    <x-input-label for="contact" :value="__('Contact No.')" />
                    <x-text-input type="number" id="contact" name="contact" required />
                </div>

                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email Address')" />
                    <x-text-input type="email" id="email" name="email" required />
                </div>

                <div class="mb-3">
                    <x-input-label for="resume" :value="__('Resume')" />
                    <x-text-input type="file" id="resume" name="resume" required />
                </div>

                <button class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </main>
@endsection
