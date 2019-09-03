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
        <form class="form-horizontal" action="{{route('admin.category.store')}}" method = 'post'>
            {{csrf_field()}}

            {{-- Form Include --}}

            @include('admin.categories.partials.form')
        </form>
    </div>




    @endsection
