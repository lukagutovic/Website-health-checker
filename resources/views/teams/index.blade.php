
@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Teams:</div>
                <div class="card-body"><a class="pull-right btn btn-default btn-sm" href="{{route('teams.create')}}">
                    <i class="fa fa-plus"></i> Create team
                </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{$team->name}}</td>
                                    <td>
                                        @if(auth()->user()->id == $team->owner_id)
                                            <span class="label label-success">Owner</span>
                                        @else
                                            <span class="label label-primary">Member</span>
                                        @endif
                                    </td>
                                    <td>
                                        
                                            <a href="#" class="btn btn-sm btn-default">
                                                <i class="fa fa-sign-in"></i> Switch
                                            </a>
                                        
                                            <span class="label label-default">Current team</span>
                                      

                                        <a href="{{route('members.show', $team)}}" class="btn btn-sm btn-default">
                                            <i class="fa fa-users"></i> Members
                                        </a>

                                        @if(auth()->user()->id == $team->owner_id)

                                            <a href="{{route('teams.edit', $team)}}" class="btn btn-sm btn-default">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <form style="display: inline-block;" action="{{route('teams.destroy', $team)}}" method="post">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>









                </div>
            </div>
        </div>
    </div>
@endsection