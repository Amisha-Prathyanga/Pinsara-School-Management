<div class="form-group {{ $errors->has('ad_ID') ? 'has-error' : ''}}">
    <label for="ad_ID" class="control-label">{{ 'Ad Id' }}</label>
    <input class="form-control" name="ad_ID" type="text" id="ad_ID" value="{{ isset($advertisment->ad_ID) ? $advertisment->ad_ID : ''}}" >
    {!! $errors->first('ad_ID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($advertisment->image) ? $advertisment->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('popImage') ? 'has-error' : ''}}">
    <label for="popImage" class="control-label">{{ 'Popimage' }}</label>
    <input class="form-control" name="popImage" type="file" id="popImage" value="{{ isset($advertisment->popImage) ? $advertisment->popImage : ''}}" >
    {!! $errors->first('popImage', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
