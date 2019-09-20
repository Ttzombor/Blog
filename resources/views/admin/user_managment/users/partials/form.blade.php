@if($errors->any())
    <div class = "alert alert-warning">
        <ul>
            @foreach($errors as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
        </ul>
    </div>
    @endif


<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="User name"
       value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required>

<label for="">Email</label>
<input type="text" class="form-control" name="Email" placeholder="User email"
       value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required>

<label for="">Password</label>
<input type="text" class="form-control" name="title" placeholder="password">
<label for="">Password confirm</label>
<input type="text" class="form-control" name="title" placeholder="password confirm">


<hr />


<input class="btn btn-primary" type="submit" value="Save">
