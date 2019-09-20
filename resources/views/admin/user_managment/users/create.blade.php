@extends('admin.layouts.app_admin')

@section('content')

    <div class ="container">

        @component('admin.components.breadcrum')
            @slot('title') Create User @endslot
            @slot('parent') Main @endslot
            @slot('active') User  @endslot
        @endcomponent

    </div>
    <div>
        <form class="form-horizontal" action="{{route('admin.user_managment.user.store')}}" method = 'post'>
            {{csrf_field()}}

            {{-- Form Include --}}

            @include('admin.user_managment.users.partials.form')
        </form>
    </div>




@endsection
