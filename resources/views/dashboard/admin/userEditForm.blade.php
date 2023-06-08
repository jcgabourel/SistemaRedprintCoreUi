@extends('dashboard.base')

@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> {{ __('Edit') }} {{ $user->name }}
          </div>
          <div class="card-body">
            <br>
            <form method="POST" action="/users/{{ $user->id }}">
              @csrf
              @method('PUT')
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon c-icon-sm">
                      <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                    </svg>
                  </span>
                </div>
                <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name" value="{{ $user->name }}" required autofocus>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ $user->email }}" required>
              </div>
              <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
              <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
        <div class="card">
          <div class="card-header"> Roles</div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped">
              <thead>
                <tr>
                  <th>Rol</th>
                  
                  <th></th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($user->getRoleNames() as $rol)
                  <tr>
                    <td>{{$rol}}</td>
                    <td><form action="{{ route('users.destroy', $user->id ) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-block btn-danger">Remove</button>
                  </form></td>
                  
                  </tr>
                    
                  @endforeach
              </tbody>
            </table>
            <select class="form-control" name="roles">
              @foreach($roles as $rol)
              <option value="{{$rol->id}}" selected="">{{$rol->name}}</option>
              @endforeach
              
              
            </select>
            <br />
            <button class="btn btn-block btn-success" type="submit">{{ __('Assign') }}</button>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')

@endsection