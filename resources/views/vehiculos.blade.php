@extends('layouts.app')

@section('vehiculos')
<div class="filter-list row justify-content-start mb-4">
    <div class="filter-item col-1 justify-content-center align-self-center">
        <p style="color: #ffffff; font-size: .6em; line-height: 10vh; margin: 0">Filtrar</p>
    </div>
    <div class="filter-item col">
        <select id="marca">
            <option value="">Seleccionar Marca</option>
            <option value="marca1">Marca 1</option>
            <option value="marca2">Marca 2</option>
            <option value="marca3">Marca 3</option>
        </select>
    </div>
    <div class="filter-item col">
        <select id="año">
            <option value="">Seleccionar Año</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
        </select>
    </div>
    <div class="filter-item col">
        <input type="text" id="modelo" placeholder="Buscar por Modelo">
    </div>
    <div class="filter-item col">
        <input type="text" id="placa" placeholder="Buscar por Placa">
    </div>
    <div class="filter-item col">
        <input  hidden>
    </div>
    <button class="btn btn-outline-primary col mr-4" data-toggle="modal" data-target="#modalAgregar">Añadir Ride</button>

</div>

<div class="rides-list row xl-row-cols-4 justify-content-around">
    <div class="col ride">
        <div class="row">
            <div class="col-8">
                <div class="contenido-formulario">
                    <div class="contenido-formulario">
                        <strong class="titulo" style="color: #F61F60; font-size: .9rem">¡2 Lugares Disponibles!</strong>
                        <div class="informacion">
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo"></i>   De Universidad Politecnica de Durango</p>
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo-alt-fill"></i> A soriana centro</p>
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-car-front-fill"></i> Nissan versa</p>
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-clock-history"></i> llegada en 20 minutos</p>
                            <p style="color: #F61F60; font-weight: bold"><i class="bi bi-cash-coin"></i> 16 MXN</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 justify-content-centers" style="margin-top: 20px">
                <div align="center" ><img class="profile-photo" src="{{ asset('assets/Ale.jpg ')}}"></div>
                {{-- <img class="profile-photo" src="{{ asset('assets/mantenimiento.jpg')}}"> --}}
                <p style="color: #F61F60; text-align: center">Alan Vicente</p>
            </div>
        </div>
    </div> 
    <div class="col ride">
        <div class="row">
            <div class="col-8">
                <div class="contenido-formulario">
                    <strong class="titulo" style="color: #F61F60; font-size: .9rem">¡2 Lugares Disponibles!</strong>
                    <div class="informacion">
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo"></i>   De Universidad Politecnica de Durango</p>
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo-alt-fill"></i> A soriana centro</p>
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-car-front-fill"></i> Nissan versa</p>
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-clock-history"></i> llegada en 20 minutos</p>
                        <p style="color: #F61F60; font-weight: bold"><i class="bi bi-cash-coin"></i> 16 MXN</p>
                    </div>
                </div>
            </div>
            <div class="col-4 justify-content-centers" style="margin-top: 20px">
                <div align="center" ><img class="profile-photo" src="{{ asset('assets/Ale.jpg ')}}"></div>
                {{-- <img class="profile-photo" src="{{ asset('assets/mantenimiento.jpg')}}"> --}}
                <p style="color: #F61F60; text-align: center">Alan Vicente</p>
            </div>
        </div>
    </div> 
    <div class="col ride">
        <div class="row">
            <div class="col-8">
                <div class="contenido-formulario">
                    <div class="contenido-formulario">
                        <strong class="titulo" style="color: #F61F60; font-size: .9rem">¡2 Lugares Disponibles!</strong>
                        <div class="informacion">
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo"></i>   De Universidad Politecnica de Durango</p>
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo-alt-fill"></i> A soriana centro</p>
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-car-front-fill"></i> Nissan versa</p>
                            <p style="color: lightgray; font-size: .7rem"><i class="bi bi-clock-history"></i> llegada en 20 minutos</p>
                            <p style="color: #F61F60; font-weight: bold"><i class="bi bi-cash-coin"></i> 16 MXN</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 justify-content-centers" style="margin-top: 20px">
                <div align="center" ><img class="profile-photo" src="{{ asset('assets/Ale.jpg ')}}"></div>
                {{-- <img class="profile-photo" src="{{ asset('assets/mantenimiento.jpg')}}"> --}}
                <p style="color: #F61F60; text-align: center">Alan Vicente</p>
            </div>
        </div>
    </div> 
    <div class="col ride">
        <div class="row">
            <div class="col-8">
                <div class="contenido-formulario">
                    <strong class="titulo" style="color: #F61F60; font-size: .9rem">¡2 Lugares Disponibles!</strong>
                    <div class="informacion">
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo"></i>   De Universidad Politecnica de Durango</p>
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-geo-alt-fill"></i> A soriana centro</p>
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-car-front-fill"></i> Nissan versa</p>
                        <p style="color: lightgray; font-size: .7rem"><i class="bi bi-clock-history"></i> llegada en 20 minutos</p>
                        <p style="color: #F61F60; font-weight: bold"><i class="bi bi-cash-coin"></i> 16 MXN</p>
                    </div>
                </div>
            </div>
            <div class="col-4 justify-content-centers" style="margin-top: 20px">
                <div align="center" ><img class="profile-photo" src="{{ asset('assets/Ale.jpg ')}}"></div>
                {{-- <img class="profile-photo" src="{{ asset('assets/mantenimiento.jpg')}}"> --}}
                <p style="color: #F61F60; text-align: center">Alan Vicente</p>
            </div>
        </div>
    </div> 
</div>


@endsection