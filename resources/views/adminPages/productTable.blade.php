



@extends("adminPages.layout")


@section("main")

<div class="card" >
  <h1 class="text-center">Product Table</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">update</th>
      <th scope="col">delete</th>
    </tr>
  </thead>


@foreach($pro as $p)
<tr class="record" >
    
    <td class="record"> {{$p->id}}</td>
    <td class="record">{{$p->productName}} </td>
    <td class="record"> {{$p->productPrice}}</td>
    <td class="record">{{$p->productQuantity}} </td>
    <td class="record btnsearch">           <button class="btn btnsearch2 text-white" type="submit"> <a class="btnsearch2 text-white" href="edit/{{$p->id}}">edit</a></button>        </td>
    <td class="record btnsearch">   <button class="btn btnsearch2 text-white" type="submit"> <a  class="btnsearch2 text-white" href="delete/{{$p->id}}">delete</a></button>  </td>
</tr>


</div>


</div>


@endforeach

@if(session('msg'))
<script> alert (" {{session('msg')}}")</script>
@endif

</table>
@endsection