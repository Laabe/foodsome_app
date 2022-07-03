@extends('admin_layouts.app')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="table" class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Website</th>
                                        <th>E-mail</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($restaurants as $restaurant)
                                        <tr>
                                            <td>
                                                <a href="{{ route('restaurants.show', $restaurant) }}"
                                                    class="text-muted text-decoration-none">{{ $restaurant->name }}</a>
                                            </td>
                                            <td>{{ $restaurant->website }}</td>
                                            <td>{{ $restaurant->email }}</td>
                                            <td>
                                                <a href="{{ route('restaurants.edit', $restaurant) }}">Edit</a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $restaurants->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
