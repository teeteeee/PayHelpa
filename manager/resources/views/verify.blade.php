<x-app-layout>
    <x-slot name="header">
        <!--<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>-->
    </x-slot>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ventura.dreamguystech.com/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 00:16:17 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>PayHelpa - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{asset('public/assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/plugins/morris/morris.css')}}">

<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
<!--[if lt IE 9]>
            <script src="{{asset('public/assets/js/html5shiv.min.js')}}"></script>
            <script src="{{asset('public/assets/js/respond.min.js')}}"></script>
        <![endif]-->
</head>
<body>
@include('sweetalert::alert')
@include('flash-message')

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Verify Users </h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> / Verify Users</li>
</ul>
</div>

</div>
<div class="d-flex justify-content-center">
      
      <a href="#" ></a>      
</div>
</div>
 
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">List of users to be verified</h4>
<!--<p class="card-text">
This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
</p>-->
<div class="d-flex flex-row-reverse">
<form class="form-inline my-2 my-lg-0" action = "" method= "get" >
<div class="input-group">
  <div >
    <input type="search" class="form-control mr-sm-2" placeholder ="Search" name="keyword">
    <label class="form-label" for="form1"></label>
  </div>
  <input type="submit" class="btn btn-primary">
</div>
</form>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="datatable table table-stripped">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Documents</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($users as $user)
    <tr>
        
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><a href="{{route('show',$user->id)}}" class="btn btn-outline-primary mr-2"></i>Show </a></td>

        <td><a href="{{route('update_verify',$user->id)}}" onclick="return confirm('ARE YOU SURE YOU WANT TO VERIFY THIS USER?')"  class="btn btn-outline-primary mr-2"></i>Verify </a></td>

    </tr>
@endforeach
@include('flash-message')
</tbody>


</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="{{asset('public/assets/js/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables/datatables.min.js')}}"></script>

<script src="{{asset('public/assets/js/script.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to verify this user?`,
              text: "If you Verify this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willVerify) => { 
            if (willVerify) {
              form.submit();
            }
          });
      });
  
</script>

</body>
</html>
</x-app-layout>
