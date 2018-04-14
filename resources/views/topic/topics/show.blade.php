@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Topic {{ $topic->id }}</div>
                    <div class="card-body">

                        
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $topic->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $topic->Title }} </td></tr><tr><th> Content </th><td> {{ $topic->Content }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
