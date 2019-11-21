@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <h2>Restaurants</h2>
    </div>
    <div class="row">
        <div class="col-6 p-3">
            <div class="row justify-content-center">
            <div><img src="/fig/BurgerTime.jpg" Style=" width:300px; height:180px; border-right: 1px solid#f8fafc" class="pr-3"></div>
            </div>
            <div class="row justify-content-center">
                <h6> &nbsp; </h6>
            </div>
            <div class=" row justify-content-center">
                <a href="{{Route('Burger')}}"><h4> Burger Time </h4></a>
            </div>
            <div class="row justify-content-center">
                <h4>Shop No. 01</h4>
            </div>
        </div>
        <div class="col-6 p-3">
            <div class="row justify-content-center">
            <div><img src="/fig/chickenhut.jpg" Style=" width:300px; height:180px; border-right: 1px solid#f8fafc" class="pl-3"></div>
            </div>
            <div class="row justify-content-center">
                <h6> &nbsp; </h6>
            </div>
            <div class="row justify-content-center">
                <a href="{{Route('Chickenhut')}}"><h4> Chicken Hut </h4></a>
            </div>
            <div class="row justify-content-center">
                <h4>Shop No. 02</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 p-3">
            <div class="row justify-content-center">
                <div><img src="/fig/Mexicano.jpg" Style=" width:300px; height:180px; border-right: 1px solid#f8fafc" class="pl-3"></div>
            </div>
            <div class="row">
                <h6> &nbsp; </h6>
            </div>
            <div class="row justify-content-center">
                <a href="{{Route('Mexicano')}}"> <h4> Mexicano </h4></a>
            </div>
            <div class="row justify-content-center">
                <h4>Shop No. 03</h4>
            </div>
        </div>
        <div class="col-6 p-3">
            <div class="row justify-content-center">
                <div><img src="/fig/RajDarbar.jpg" Style=" width:300px; height:180px; border-right: 1px solid#f8fafc" class="pl-3"></div>
            </div>
            <div class="row justify-content-center">
                <h6> &nbsp; </h6>
            </div>
            <div class="row justify-content-center">
                <a href="{{Route('Rajdarbar')}}"><h4> Raj Darbar </h4></a>
            </div>
            <div class="row justify-content-center">
                <h4>Shop No. 04</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 p-3">
            <div class="row justify-content-center">
                <div><img src="/fig/IceTime.png" Style=" width:300px; height:180px; border-right: 1px solid#f8fafc" class="pr-3"></div>
            </div>
            <div class="row justify-content-center">
                <h6> &nbsp; </h6>
            </div>
            <div class="row justify-content-center">
                <a href="{{Route('Ice')}}"><h4> Ice Time </h4></a>
            </div>
            <div class="row justify-content-center">
                <h4>Shop No. 05</h4>
            </div>
        </div>
        <div class="col-6 p-3">
            <div class="row justify-content-center">
                <div><img src="/fig/GrandFish.jpg" Style=" width:300px; height:180px; border-right: 1px solid#f8fafc" class="pl-3"></div>
            </div>
            <div class="row justify-content-center">
                <h6> &nbsp; </h6>
            </div>
            <div class="row justify-content-center">
                <a href="{{Route('Fish')}}"><h4> Grand Fish </h4></a>
            </div>
            <div class="row justify-content-center">
                    <h4>Shop No. 06</h4>
            </div>
        </div>
    </div>
</div>
@endsection
