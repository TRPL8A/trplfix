@extends('home2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">driver {{ $driver->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/driver') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/driver/' . $driver->id . '/edit') }}" title="Edit driver"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['driver', $driver->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete driver',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $driver->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $driver->nama }} </td></tr><tr><th> Username </th><td> {{ $driver->username }} </td></tr><tr><th> Email </th><td> {{ $driver->email }} </td></tr><tr><th> Password </th><td> {{ $driver->password }} </td></tr><tr><th> Alamat </th><td> {{ $driver->alamat }} </td></tr><tr><th> Telfon </th><td> {{ $driver->telfon }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
