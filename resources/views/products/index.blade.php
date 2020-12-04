@extends('layout.master')

@section('title', 'all book')

@section('head')
    
@endsection

@section('content')
    <div class="container">
        <div>
            <h2 class="h2">All Books</h2>
        </div>
        <div class="row" >
            <div class="col-sm-12 " style="display: flex; " >
                @foreach ($products as $product)
                <div class="card" style="width: 18rem; margin-left: 5px;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                      <p class="card-text">Author : {{$product->author}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Year : {{$product->year}}</li>
                      <li class="list-group-item">Genre :  {{$product->genre}}</li>
                      <li class="list-group-item">Pages : {{$product->pages}}</li>
                      <li class="list-group-item">Price : {{$product->price}}</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">-</a>
                      <a href="#" class="card-link">-</a>
                    </div>
                    
                  </div>    
                @endforeach
            </div>
            <div>
                <div class="row">
                    <a href="/products/create">Add Product</a>
                </div>
            </div>
        </div>
        
    </div>
    {{-- <span>
        <section>
            <div class="container">
                hallo 
            </div>
        </section>
    </span> --}}
@endsection

@section('javascript')
    
@endsection