@extends('admin.layouts.app_admin')

@section('content')

    <div class ="container">

        @component('admin.components.breadcrum')
            @slot('title') List Of Categories @endslot
            @slot('parent') Main @endslot
            @slot('active') Categories @endslot
        @endcomponent

    </div>
    <div>
        <form class="form-horizontal" action="{{route('admin.article.store')}}" method = 'post'>
            {{csrf_field()}}

            {{-- Form Include --}}

            @include('admin.articles.partials.form')
        </form>
    </div>




@endsection
