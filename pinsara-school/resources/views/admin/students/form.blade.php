<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($student->name) ? $student->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($student->email) ? $student->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($student->address) ? $student->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
    <label for="telephone" class="control-label">{{ 'Telephone' }}</label>
    <input class="form-control" name="telephone" type="text" id="telephone" value="{{ isset($student->telephone) ? $student->telephone : ''}}" >
    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('birthday') ? 'has-error' : ''}}">
    <label for="birthday" class="control-label">{{ 'Birthday' }}</label>
    <input class="form-control" name="birthday" type="date" id="birthday" value="{{ isset($student->birthday) ? $student->birthday : ''}}" >
    {!! $errors->first('birthday', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('school') ? 'has-error' : ''}}">
    <label for="school" class="control-label">{{ 'School' }}</label>
    <input class="form-control" name="school" type="text" id="school" value="{{ isset($student->school) ? $student->school : ''}}" >
    {!! $errors->first('school', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
