<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<?php 
    if(Schema::hasTable('categories')){
        $category =    DB::table('categories')->select('namecategory', 'id')->get();
        $new_category = [];
        if(isset($category)){
            foreach ($category as  $value) {
               $new_category[$value->id] = $value->namecategory;
            }
        }
        
        $categoryselected = !empty($post)?$post['category']:'1';
    }
     


        
?>
@if(Schema::hasTable('categories'))
<div class="form-group col-sm-12">
    {!! Form::label('category', 'category:') !!}
   {{ Form::select('category', @$new_category, $categoryselected, ['id' => 'category', 'class' => 'form-control']) }}
</div>
@endif




<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control content-input']) !!}
</div>


<script>
    CKEDITOR.replace( 'content' );
</script>

