@extends('layouts.app')

@section('content')
    <div id="root" class="container-fluid home">
        <div class="row justify-content-center">

            <div id="my-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img-temp\sunset-2k.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img-temp\heart.jpg') }}" alt="Second slide">
                        <a class="link-img" href="https://www.pexels.com/it-it/foto/donna-seduta-mentre-mostra-le-mani-del-segno-del-cuore-1535288/">Foto di Hassan OUAJBIR da Pexels</a>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img-temp\coastal.jpg') }}" alt="Third slide">
                    </div>
                </div>

                <div class="container my-form-home">
                    <div class="row">
                        <div class="col-xl-12 jumbo-form">
                            <div class="header-jumbo">
                                <p class="subtitle letter-spacing-4 mb-2 text-secondary text-shadow">The best holiday experience</p>
                                <h1 class="display-3 fw-bold text-shadow">Stay like a local</h1>
                            </div>

                            <div class="search-bar">

                                <form action="#">
                                    <div class="row">

                                        <div class="col-lg-4 d-flex align-items-center form-group">
                                            <input class="form-control border-0 shadow-0" type="text" name="search" placeholder="What are you searching for?">
                                        </div>

                                        <div class="col-lg-4 d-flex align-items-center form-group">

                                            <label class="label-absolute" for="location">
                                                <i class="fa fa-crosshairs"></i>
                                                <span class="sr-only">City</span>
                                            </label>

                                            <input class="form-control border-0 shadow-0" type="text" name="location" placeholder="Location" id="location">
                                        </div>

                                        <div class="col-lg-4 d-flex justify-content-center">
                                            <button class="btn rounded-pill" type="submit">Search</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
@endsection

@section('foot-script')
    <script src="{{asset('js/posts.js') }}"  type="text/javascript"></script>
@endsection
