@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List User</div>

                <div class="panel-body">
                    <div class="table-responsive">          
                      <table class="table table-condensed table-hover table-bordered table-striped">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th>Name</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if($data['user'])
                            @foreach($data['user'] as $key=>$val)
                            <tr>
                                <td> {{$key+1}}</td>
                                <td> {{$val->name}}</td>
                                <td> {{$val->email}}</td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
