@extends('layout.master')

@section('title', 'all book')

@section('head')
    
@endsection

@section('content') 
    <div class="container">
        <div>
            <h2 class="h2">Add Book</h2>
        </div>
        <div class="row" >
            <div class="col-md-12 "  >
                <form  method="POST" action="/prodcuts" class="form-grup" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">name :</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div>
                        <label for="name">author :</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                    <div>
                        <label for="name">year :</label>
                        <input type="number" class="form-control" id="year" name="year">
                    </div>
                    <div>
                        <label for="name">genre :</label>
                        <input type="text" class="form-control" id="genre" name="genre">
                    </div>
                    <div>
                        <label for="name">pages :</label>
                        <input type="number" class="form-control" id="pages" name="pages">
                    </div>
                    <div>
                        <label for="name">price :</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div>
                        <label for="image" class="file-image">choose file</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">
                            add
                        </button>
                    </div>
                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        $(document).ready(function(){
            $(document).on('change', '#image', function(){
                letimage = $('#image').val()
                $('.file-image').text(Image)
            })
        })
    </script>
@endsection