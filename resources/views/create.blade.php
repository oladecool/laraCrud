@extends('layout.main')
@section('content')
    <h1>Create</h1> 

    <!-- Material form login -->
<div class="row" style="justify-content: center">
  <div class="col-lg-6">
  <div class="card" style="margin-bottom: 60px;">

    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Add Student</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="{{ route('store') }}" method="POST">

        @if ($errors->any())
        @foreach ($errors-> all() as $error)
        
          <div class="alert alert-danger" role="alert">
              {{ $error }}
          </div> 

        @endforeach
            
        @endif
         
        {{ csrf_field() }}

        <div class="form-row">
            <div class="col">
                <!-- First name -->
                <div class="md-form">
                    <input type="text" id="materialRegisterFormFirstName" name="firstname" class="form-control">
                    <label for="materialRegisterFormFirstName">First name</label>
                </div>
            </div>
            <div class="col">
                <!-- Last name -->
                <div class="md-form">
                    <input type="text" id="materialRegisterFormLastName" name="lastname" class="form-control">
                    <label for="materialRegisterFormLastName">Last name</label>
                </div>
            </div>
        </div>
  
        <div class="md-form">
          <input type="email" id="materialLoginFormEmail" name="email" class="form-control">
          <br>
          <label for="materialLoginFormEmail">E-mail</label>
        </div>

        <!-- Phone number -->
        <div class="md-form">
            <input type="password" id="materialRegisterFormPhone" name="phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
            <label for="materialRegisterFormPhone">Phone number</label>
            <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                Optional - for two step authentication
            </small>
        </div>
  
        <div class="d-flex justify-content-around">
          <div>
            <!-- Remember me -->
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
              <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
            </div>
          </div>
          <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
          </div>
        </div>
  
         <!-- Sign up button -->
         <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Add student</button>
  
        <!-- Register -->
        <p>Not a member?
          <a href="">Register</a>
        </p>
  
  
      </form>
      <!-- Form -->
  
    </div>
  
   </div>
 </div> 
</div>
  <!-- Material form login -->
@endsection