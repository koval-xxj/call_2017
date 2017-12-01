@extends('admin.base')

@section('visitors')
<div class="row-fluid">
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Visitors Table</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>country</th>
                        <th>city</th>
                        <th>age</th>
                        <th>church</th>
                        <th>date register</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($visitors as $visitor)
                    <tr>
                        <th>{{$visitor->name}}</th>
                        <th>{{$visitor->email}}</th>
                        <th>{{$visitor->phone}}</th>
                        <th>{{$visitor->country}}</th>
                        <th>{{$visitor->city}}</th>
                        <th>{{$visitor->age}}</th>
                        <th>{{$visitor->chirch}}</th>
                        <th>{{$visitor->created_at}}</th>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
