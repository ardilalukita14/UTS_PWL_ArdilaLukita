@extends('layouts.app')

@section('content')
</br></br></br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 style="text-align:center; color:blue; font-family: 'Libre Franklin', sans-serif">You Have Successfully Logged in!</h3>
                    </br></br>
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                
                                <a button type="submit" class="btn btn-primary" href="{{ route('buku.index') }}">
                                Go To The Book List</a>

                               
                </div>
            </div>   
        </div>
    </div>
    </br></br></br>   
    <h1 style="text-align:center; color:white; font-family: 'Libre Franklin', sans-serif; font-size:50px">--WELCOME TO THE BOOK PLACE!--</h1>
              
</div>

@endsection
