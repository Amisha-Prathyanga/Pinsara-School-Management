<div class="form-group {{ $errors->has('grade') ? 'has-error' : ''}}">
    <label for="grade" class="control-label">{{ 'Grade' }}</label>
    <input class="form-control" name="grade" type="number" id="grade" value="{{ isset($grade->grade) ? $grade->grade : ''}}" >
    {!! $errors->first('grade', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
