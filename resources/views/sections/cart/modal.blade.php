<div class="list_cart clearfix">
    <div class="content">
        <div class="info clearfix">
            <div class="col-xs-7 col-sm-8 col-md-8 col-lg-8">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-2 ico glyphicon glyphicon-shopping-cart"></div>
                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10">
                    <div class="col-xs-6 col-sm-8 col-md-9 col-lg-9 text">Mi carrito</div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 n_cart">
                        (@{{items.count}})
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
                <div class="precio"><span>€/. @{{items.total}}</span>
                </div>
            </div>
        </div>
        <div class="cart-detail">
            <div class="cart-list">
               <div class="list_productos clearfix" v-for="item in items.cart">
                    <img class="col-xs-2 col-sm-2 col-md-2 col-lg-2" :src="item.options.image">
                    <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4">@{{item.name}}</p>
                    <p class="cantidad col-xs-1 col-sm-1 col-md-1 col-lg-1"><span>x</span>@{{item.qty}}</p>
                    <p class="punit col-xs-2 col-sm-2 col-md-2 col-lg-2">@{{item.price}}</p>
                    <p class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button @click.prevent="deleteItem(item)"
                                type="button" class="btn btn-danger btn-sm dropdown-toggle">
                            <span class="glyphicon glyphicon-trash fa-lg" aria-hidden="true"></span>
                        </button>
                    </p>
                </div>
                <div class="list_total clearfix">
                    <div class="col-xs-7 col-sm-5 col-md-7 col-lg-7"><strong>Total:</strong></div>
                    <strong class="col-xs-5 col-sm-7 col-md-5 col-lg-5"><span>€/. @{{items.total}}</span>
                    </strong>
                </div>
            </div>
            <div class="nav_button clearfix">
                <div class="col-xs-5 col-sm-5 col-md-7 col-lg-7">
                    <button onclick="mostrar()" class="continuar">Continuar</button>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5">
                    <a href="carrito-compras">
                        <button class="tramitar">Tramitar Pedido</button>
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>
