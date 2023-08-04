@extends('layouts.main')

@section('container')
<section class="py-5">
    <div class="container px-4 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Category</span></h1>
        </div>

        @foreach ($categories as $categories)
            <div class="row gx-5 justify-content-center ">

               <ul>
                <li>
                    <h2>
                        <a href="/categories/{{ $categories->slug }}">{{ $categories->name }}</a>
                    </h2>
                </li>
               </ul>
                </div>
                @endforeach
            </div>

    <a href="/projects">Back to project</a>
        </section>
@endsection
