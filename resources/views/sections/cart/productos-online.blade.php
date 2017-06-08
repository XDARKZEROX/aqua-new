@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="clearfix brand">
            <h1 class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                Adquiere nuestros productos
                <strong>vía online</strong>
            </h1>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img class="col-xs-7 col-sm-12 col-md-12 col-lg-12" src="images/adquirir_producto.png">
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div id="container-main" class="container main">
        <h2>PRODUCTOS</h2>
        <div id="modal-contenedor">
        @include('sections.cart.modal')
            <!-- importal modal-->
            <!-- End -->
        </div>

        @foreach($products as $producto)
            <section class="productos_box clearfix">
                <div class="clearfix">
                    <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                        <img class="col-xs-5 col-sm-12 col-md-12 col-lg-12" src="{{$producto->image}}">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
                        <b>{!!html_entity_decode($producto->title)!!}</b>
                        <p>{!!html_entity_decode($producto->description)!!}<br>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
                        <div class="precio">
                            <strong><span>€/.</span>{{$producto->price}}</strong>
                        </div>
                        <div class="clearfix">
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 numero_cajas">
                                <p class="col-xs-9 col-sm-8 col-md-8 col-lg-7">Seleccionar el N° de cajas</p>
                                <input min="1" max="50" name="quantity" id="quantity-{{$producto->code}}"
                                       type="number"
                                       class="col-xs-3 col-sm-4 col-md-4 col-lg-2" value="1">
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                <button data-button="" @click.prevent="addProduct({{$producto->code}})" class="col-xs-12 col-sm-8 col-md-5 col-lg-5 btn-add-product">
                                    <span class="glyphicon glyphicon-plus"></span> AGREGAR
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endforeach
</div>
@endsection
@section('vuejs.footer')
    <script type="text/javascript" src="/js/app.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection
