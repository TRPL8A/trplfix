<div class="form-group {{ $errors->has('namaPesawat') ? 'has-error' : ''}}">
    {!! Form::label('namaPesawat', 'Namapesawat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('namaPesawat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('namaPesawat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('asal') ? 'has-error' : ''}}">
    {!! Form::label('asal', 'Asal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('asal', null, ['class' => 'form-control']) !!}
        {!! $errors->first('asal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tujuan') ? 'has-error' : ''}}">
    {!! Form::label('tujuan', 'Tujuan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tujuan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tujuan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('berangkat') ? 'has-error' : ''}}">
    {!! Form::label('berangkat', 'Berangkat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'berangkat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('berangkat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tiba') ? 'has-error' : ''}}">
    {!! Form::label('tiba', 'Tiba', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'tiba', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tiba', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
    {!! Form::label('harga', 'Harga', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('harga', null, ['class' => 'form-control']) !!}
        {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
