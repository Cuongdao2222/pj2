@extends('layouts.app')

@section('content')
    <?php  

        $groupProduct = $_GET['groupid'];
        $productId = $_GET['productId'];

    ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Tạo thuộc tính</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'filters.store']) !!}

            <input type="hidden" name="group_product_id" value="{{ $_GET['groupid']  }}">

            <input type="hidden" name="productId" value="{{ $productId  }}">

            <div class="card-body">

                <div class="row">
                    @include('filters.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('groupProducts.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection