@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 style="color: white ; position: relative;">You are logged in <b> {{ Auth::user()->name }} </b></h1>
                    @if ( Auth::user()->name  == 'admin')
                       <form action=""> 
                           <div class="">
                                <button style="padding: 12px 10px;border: none; font-size: 18px;border-radius: 30px;background-color: rgb(224, 71, 161);color: white;margin-bottom: 5px;" >Ajouter ou modifier client</button>
                        
                            </div>
                        </form>
                    @endif
                    
                   <a href="/client"> <button style="padding: 12px 10px;border: none; font-size: 18px;border-radius: 30px;background-color: rgb(224, 71, 161);color: white;margin-bottom: 5px;">Visualiser les stations </button></a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
