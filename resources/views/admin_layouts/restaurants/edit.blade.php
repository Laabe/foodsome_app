@extends('admin_layouts.app')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <form action="{{ route('restaurants.update', $restaurant) }}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('admin_layouts.restaurants.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
