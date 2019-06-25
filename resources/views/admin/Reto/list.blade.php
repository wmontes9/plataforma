@extends("layouts.app_admin")

@section("content")
<div class="container">
<div class="row text-center">
    <h3>Retos</h3>
</div>
<div class="row" id="appRetos">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="#newReto" data-toggle="modal" class="btn btn-primary pull-right">Nuevo</a>
            <div class="clearfix"></div>
            <table class="table table-responsive" style="margin-top: 10px;">
                <tr>
                    <th>Id</th>
                    <th>Enunciado</th>
                    <!--<th style="width: 350px;">Descripción</th>
                    <th style="width: 200px;">Imagen</th>-->
                    <th colspan="5" class="">Opciones</th>
                </tr>
                <tr v-for="reto in retos">
                    <td>@{{reto.id}}</td>
                    <td><a href="" v-on:click.prevent="soluciones(reto.id)">@{{reto.enunciado}}</a></td>
                    <!--<td>@{{reto.descripcion}}</td>
                    <td><img :src="'{{url('/imgreto')}}/'+reto.url_imagen" class="img-responsive" width="100%"></td>
                    -->
                    <td><a href="" v-on:click.prevent="editReto(reto)"><i class="far fa-edit"></i></a></td>
                    <td><a href="" v-on:click.prevent="deleteReto(reto.id)"><i class="fas fa-trash-alt"></i></a></td>

                </tr>
            </table>
        </div>
    
    </div>
    @include("admin.Reto.create")
    @include("admin.Reto.edit")
</div>
</div>
<script type="text/javascript" src="{{asset('js/Controller/RetoController.js')}}"></script>
@endsection