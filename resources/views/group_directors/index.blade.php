@extends('layouts.app')
    @section('title', 'Create New User')
    @section('content')  
<div class="row">
<div class="col s12">
    <div class="card">
        <div class="card-content">
            <h4 class="card-title">Page Length Options</h4>
            <div class="row">
                <div class="col s12">
                    <table id="page-length-option" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groupdirector as $director)
                            <tr>
                                <td>{{$director->name}}</td>
                                <td>{{$director->position}}</td>
                                <td><img src="group_director/{{$director->image}}" width="100px" height="100px" /></td>
                                <td><a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1 mb-1">Edit</a>
                                    <a class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1 mb-1">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    @endsection