
<div style="width:400px;">
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>


<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', 'example@gmail .com', array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('phone_number', 'Phone No.:') !!}
    {!! Form::text('phone_number', '1234', array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('mobile_number', 'Mobile No.:') !!}
    {!! Form::text('mobile_number', '1234', array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('registered_on', 'Registered On:') !!} (YYYY-MM-DD)
    {!! Form::text('registered_on') !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address') !!}
</div>

<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state') !!}
</div>

<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>

</div>