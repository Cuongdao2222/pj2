@extends('layouts.app')

@section('content')


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Product</h1>
                </div>
            </div>
        </div>
    </section>





    @if(session()->get('id'))   


    <div class="btn btn-info"><a href="{{ route('images.create', [$product->id]) }}"> thêm ảnh chi tiết cho sản phẩm</a></div>

    <div class="btn btn-info seo-click"> Dùng cho SEO </div>
   
    <?php  

        $products_seo = App\Models\products::select('Meta_id')->where('id', session()->get('id'))->first();
    ?>
    <div class="content px-3">

        <?php $metaSeo = App\Models\metaSeo::find($products_seo->Meta_id); ?>

        @include('adminlte-templates::common.errors')

        <div class="card seo">

            {!! Form::model($metaSeo, ['route' => ['metaSeos.update', $metaSeo->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('meta_seos.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('metaSeos.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
     @endif

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'products.store', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('products.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>


     
    <script type="text/javascript">
        
        $('.seo').hide();

        $(".seo-click").click(function(){
           $('.seo').show();
        });
    </script>
@endsection


