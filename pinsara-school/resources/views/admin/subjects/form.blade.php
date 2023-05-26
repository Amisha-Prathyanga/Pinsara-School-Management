<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($subject->name) ? $subject->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($subject->description) ? $subject->description : ''}}" >
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('videoLink') ? 'has-error' : ''}}">
    <label for="videoLink" class="control-label">{{ 'Video Link (eg: https://www.youtube.com/embed/ZbqCDUOygXg)' }}</label>
    <input class="form-control" name="videoLink" type="text" id="videoLink" value="{{ isset($subject->videoLink) ? $subject->videoLink : ''}}" >
    {!! $errors->first('videoLink', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($subject->image) ? $subject->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grade_id') ? 'has-error' : ''}}">
    <label for="grade_id" class="control-label">{{ 'Grade' }}</label>
    <!-- <input class="form-control" name="grade_id" type="number" id="grade_id" value="{{ isset($subject->grade_id) ? $subject->grade_id : ''}}" > -->

    <?php echo Form::select('grade_id', $grades, isset($subject->grade_id) ? $subject->grade_id : null,  array('class' => 'form-control')); ?>

    {!! $errors->first('grade_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
