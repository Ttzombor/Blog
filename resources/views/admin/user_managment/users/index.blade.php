@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrum')
            @slot('title') List Of Users @endslot
            @slot('parent') Main @endslot
            @slot('active') Users @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.user_managment.user.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square"></i>
            Create User
        </a>
        <table class="table table-striped">
            <thead>
            <th>Name</th>
            <th>Email</th>
            <th class="text-right">Doing</th>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-right">


                        <form onsubmit="if(confirm('Delete?')){return true} else{return false}"
                              action='{{route('admin.user_managment.user.destroy', $user)}}'
                              method='POST'>
                            {{method_field('DELETE')}}
                            {{csrf_field()}}

                            <a class="btn btn-default" href="{{route('admin.user_managment.user.edit', $user)}}">
                                <i class="fa fa-edit">Edit</i>
                            </a>
                            <button type="submit" class="btn">
                                <i class="fa fa-trash">Delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>The is no Data</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$users->links()}}
                    </ul>

                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
