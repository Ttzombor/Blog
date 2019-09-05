@extends('admin.layouts.app_admin')

@section('content')

    <div class ="container">

        @component('admin.components.breadcrum')
            @slot('title') Title Of Article @endslot
            @slot('parent') Main @endslot
            @slot('active') News @endslot
        @endcomponent
    </div>
    <div>
        <form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method = 'post'>
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}

            {{-- Form Include --}}

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
            @include('admin.articles.partials.form')
        </form>
    </div>
@endsection
