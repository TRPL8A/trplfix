@extends('home2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">mobil {{ $mobil->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/mobil') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/mobil/' . $mobil->id . '/edit') }}" title="Edit mobil"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['mobil', $mobil->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete mobil',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mobil->id }}</td>
                                    </tr>
                                    <tr><th> JenisMobil </th><td> {{ $mobil->jenisMobil }} </td></tr><tr><th> Plat </th><td> {{ $mobil->plat }} </td></tr><tr><th> JumlahKursi </th><td> {{ $mobil->jumlahKursi }} </td></tr><tr><th> Status </th><td> {{ $mobil->status }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
