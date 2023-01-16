

@extends("adminPages.layout")


@section("main")



<div class="col-md-8 col-lg-7 col-xl-6">
              <img src="{{asset ('images/img1.png')}}"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
       
<form method="POST" action="addProduct" enctype=multipart/form-data>
@csrf
<div class="d-flex align-items-center">
  <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>
  <span class="h1 fw-bold mb-0 head">Add Product</span>
</div>

<br>


<div class="form-outline mb-4">
  <input type="text"   name="productName" id="form2Example17" class="form-control form-control-lg" />
  <label class="form-label text-white"  for="form2Example17">Product Name</label>
</div>

<div class="form-outline mb-4">
  <input type="number" name="productPrice" id="form2Example27" class="form-control form-control-lg" />
  <label class="form-label text-white"  for="form2Example27">Product Price</label>
</div>
<div class="form-outline mb-4">
  <input type="number" name="productQuantity" id="form2Example27" class="form-control form-control-lg" />
  <label class="form-label text-white"  for="form2Example27">Product Quantity</label>
</div>

<div class="pt-1 mb-4">
                    <button type="submit" class="btn signin btn-lg btn-block text-white"  name="btnSave" >Add Product</button>
                  </div>
                  @if(session('message'))
                  <h6 class="text-white">{{session('message')}} </h6>
                  @endif

</form>

              @endsection