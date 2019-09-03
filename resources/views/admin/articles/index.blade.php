@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrum')
            @slot('title') List Of News @endslot
            @slot('parent') Main @endslot
            @slot('active') News @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square"></i>
            Create Article
        </a>
        <table class="table table-striped">
            <thead>
            <th>Name</th>
            <th>Publication</th>
            <th class="text-right">Doing</th>
            </thead>
            <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->published}}</td>
                    <td class="text-right">


                        <form onsubmit="if(confirm('Delete?')){return true} else{return false}"
                              action='{{route('admin.article.destroy', $articlex)}}'
                              method='POST'>
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}

                            <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}">
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
                        {{$articles->links()}}
                    </ul>

                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
