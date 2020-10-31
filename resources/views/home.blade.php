
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    {{-- <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">my account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="page-wrapper">
        <div class="checkout shopping">
           <div class="container">
              <div class="row">
                 <div class="col-md-12">
                    <div class="block billing-details">
                       <h4 class="widget-title">Dashboard</h4>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Carrito de la compra</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pedidos realizados</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Datos de contactop</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Este es el carrito</div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                            </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>

@endsection
