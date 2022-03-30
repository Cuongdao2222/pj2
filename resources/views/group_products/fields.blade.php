<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 1000]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <label>Chọn danh mục liên quan</label>
    <select class="form-control" name="group-product">
        <option value="0">Không chọn</option>
        <option>Danh mục 1</option>
    </select>
</div>