

@extends("adminPages.layout")


@section("main")
<div class="col-md-8 col-lg-7 col-xl-6">
              <img src="{{asset ('images/img1.png')}}"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
<form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" name="userEmail" class=" form-control form-control-lg" />
                  <label class="form-label text-white" for="form1Example13">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" name="userPassword" class="form-control form-control-lg" />
                  <label class="form-label text-white" for="form1Example23">Password</label>
                </div>
      
         
                <!-- Submit button -->
                <button type="submit" class="text-white btn btn-lg btn-block signin">Sign in</button>
      
          
      
              </form>
              @endsection