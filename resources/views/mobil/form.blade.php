<div class="form-group {{ $errors->has('jenisMobil') ? 'has-error' : ''}}">
    {!! Form::label('jenisMobil', 'Jenismobil', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenisMobil', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenisMobil', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('plat') ? 'has-error' : ''}}">
    {!! Form::label('plat', 'Plat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('plat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('plat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jumlahKursi') ? 'has-error' : ''}}">
    {!! Form::label('jumlahKursi', 'Jumlahkursi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('jumlahKursi', ['8'=>'8', '12'=>'12', '18'=>'18'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('jumlahKursi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('status', ['tersedia'=>'tersedia', 'kosong'=>'kosong'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
