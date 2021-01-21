@extends("layouts.cart")
@section("content_app")
        <div class="row">
            <template v-for="(value, index) in productos">
                <div class="col-lg-3 item">
                    <h2 class="title-peluche">A@{{value.id}} - @{{value.nombre}}</h2>
                    <h5>s/. @{{value.price}}</h5>
                    <div class="row">
                        <img src="/imgs/peluche.jpg" class="img-peluche">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" v-model="productos[index].qty" class="form-control" placeholder="{{trans('cart.item.qty')}}">
                        </div>
                        <div class="col-sm-8">
                            <button v-on:click="addItem(value)" class="btn btn-primary" style="width: 100%;">{{trans("cart.item.add")}}</button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <button class="btn btn-danger btn-cart-detail" >
            <a style="color: #ffff;" href="/cart/details">Ir a Carrito</a>
            <img src="{{asset('imgs/icon-cart.png')}}">
        </button>
@endsection