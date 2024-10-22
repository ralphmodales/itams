<!--Prefix-->
<div class="form-group {{ $errors->has('prefix') ? ' has-error' : '' }}">
    <label for="name" class="col-md-3 control-label">{{ $translated_name }}</label>
    <div class="col-md-7 col-sm-12{{  (Helper::checkIfRequired($item, 'name')) ? ' required' : '' }}">
        <input class="form-control" type="text" name="prefix" aria-label="name" id="name" value="{{ old('prefix', $item->prefix) }}"{!!  (Helper::checkIfRequired($item, 'name')) ? ' data-validation="required" required' : '' !!} />
        {!! $errors->first('prefix', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>
