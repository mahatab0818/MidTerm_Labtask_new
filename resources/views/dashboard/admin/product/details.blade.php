@extends('employee.layouts.main')
@section('createpackage')





    <!-- Portfolio Item Heading -->
    <h1 class="my-4">
      
    </h1>
  
    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-8">
        <img class="img-fluid" src="{{ asset('/upload')}}/{{ $package->package_image}}"alt="" width="600" height="300">
      </div>
  
      
      <div class="col-md-4">
        <h3 class="my-3" style="color: coral"> Product Description</h3>
        <p>{{ $package->package_details }}</p>
        <h3 class="my-3">Package details</h3>
        <table>
            <tr>
                <td>Product type:</td>
                <td>{{ $package['package_type'] }}</td>
            </tr>
            <tr>
                <td>Product location:</td>
                <td>{{ $package['package_location'] }}</td>
            </tr>
            <tr>
                <td>Product price :</td>
                <td>{{ $package['package_price'] }}</td>
            </tr>
            <tr>
                <td >Product Feature:</td>
                <td>{{ $package['package_feature'] }}</td>
            </tr>
            
        </table>
      </div>
  
    </div>
    <!-- /.row -->
  

  
  </div>
  <!-- /.container -->
@endsection
