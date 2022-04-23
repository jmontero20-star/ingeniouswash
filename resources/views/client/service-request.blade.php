@extends('client.layouts.core')
@section('name-pagine')
Solicitar servicio,
@endsection
@section('content')
<div class="row row-reset w-100 border-content-form">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mx-0 px-0" style="background-color: #01B6ED;">
        <img class="w-100" src="{{ ('resources/banners/Solicita_Servicio.webp')}}" alt="">
        <div class="content-text-banner-form">
            <h3 class="text-banner-form-one">Para nosotros</h3>
            <h3 class="text-banner-form-one">es un gusto</h3>
            <h3 class="text-banner-form-two">contar contigo</h3>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="row row-reset w-100">
            <div class="col-12 m-auto text-center">
                <h6 class="title-one-form">Ingresa los siguientes datos para</h6>
                <h6 class="title-two-form">solicitar tu servicio de limpieza</h6>
            </div>
            <div class="row row-reset w-100">
                <div class="col-12 m-auto">
                    <form>
                        <div class="row row-reset w-100 mt-2">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row row-reset w-100">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="name">Nombres <span class="obligate-item">*</span>
                                            </label>
                                            <input class="form-control form-control-lg" type="text" placeholder="Nombres">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="name">Apellidos <span class="obligate-item">*</span>
                                            </label>
                                            <input class="form-control form-control-lg" type="text" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-reset w-100">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row row-reset w-100">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="phone">Teléfono celular <span
                                                    class="obligate-item">*</span> </label>
                                            <input class="form-control form-control-lg" type="text"
                                                placeholder="Teléfono celular">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="name">Servicio <span class="obligate-item">*</span>
                                            </label>
                                            <select class="form-control form-control-lg select-text">
                                                <option>Vehículo</option>
                                                <option>Hogar</option>
                                                <option>Empresa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-reset w-100">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row row-reset w-100">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="phone">Correo electrónico <span
                                                    class="obligate-item">*</span> </label>
                                            <input class="form-control form-control-lg" type="text"
                                                placeholder="Correo electrónico">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="name">Confirmar correo electrónico <span
                                                    class="obligate-item">*</span> </label>
                                            <input class="form-control form-control-lg" type="text"
                                                placeholder="Confirmar correo electrónico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-reset w-100">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row row-reset w-100">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="name">Ciudad <span class="obligate-item">*</span>
                                            </label>
                                            <select class="form-control form-control-lg select-text">
                                                <option>Pereira</option>
                                                <option>Dosquebradas</option>
                                                <option>Santa Rosa</option>
                                                <option>Armenia</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
                                            <label class="labels-form" for="name">Categoría de servicio <span class="obligate-item">*</span>
                                            </label>
                                            <select class="form-control form-control-lg select-text">
                                                <option>Vehículo</option>
                                                <option>Hogar</option>
                                                <option>Empresa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-reset w-100">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row row-reset w-100">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4">
                                            <label class="labels-form" for="name">Dirección <span class="obligate-item">*</span>
                                            </label>
                                            <input class="form-control form-control-lg" type="text" placeholder="Dirección">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-reset w-100">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row row-reset w-100">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label check-politics" for="exampleCheck1"> <span class="obligate-item">*</span> Acepto términos, condiciones y política de tratamiento de datos</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row row-reset w-100">
                                        <div class="col-12 text-center my-2">
                                            <button type="submit" class="btn btn-send-form">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-reset w-100 my-3 py-3">
    <div class="col-12 text-center">
        <h3 class="process-service-request">Te contamos sobre el proceso para solicitud de servicio</h3>
    </div>
</div>
<div class="row row-reset w-100 py-4 my-4">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center m-auto">
        <img class="img-icons-about" src="{{ asset('resources/icons/Puntualidad.png') }}" alt="">
        <h5 class="mt-5 text-icons-about">Puntualidad</h5>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center m-auto">
        <img class="img-icons-about" src="{{ asset('resources/icons/Calidad.png') }}" alt="">
        <h5 class="mt-3 text-icons-about">Calidad</h5>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center m-auto">
        <img class="img-icons-about" src="{{ asset('resources/icons/Compromiso.png') }}" alt="">
        <h5 class="mt-5 text-icons-about">Compromiso</h5>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center m-auto">
        <img class="img-icons-about" src="{{ asset('resources/icons/Responsabilidad.png') }}" alt="">
        <h5 class="mt-5 text-icons-about">Responsabilidad</h5>
    </div>
</div>
@endsection
