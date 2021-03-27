@extends('employee.layouts.main')


@section('createpackage')
<a href="/dashboard/viewpackage/download-pdf">Download PDF</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Product Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Type</th>
        <th scope="col">Product Location</th>
        <th scope="col">Product Price</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <tbody>
       @for($i=0; $i< count($packagelist); $i++) 
      <tr scope="row">
        <td style="color: blue">{{ $packagelist[$i]['p_id'] }}</td>
        <td  >{{ $packagelist[$i]['package_name'] }}</td>
        <td>{{ $packagelist[$i]['package_type'] }}</td>
        <td>{{ $packagelist[$i]['package_location'] }}</td>
        <td>{{ $packagelist[$i]['package_price'] }}</td>
 
        <td>
            <a href="/dashboard/editpackage/{{ $packagelist[$i]['p_id'] }}"name="btn btn-success"> Edit</a>
            
            <a href="/dashboard/viewpackage/details/{{ $packagelist[$i]['p_id'] }}" name="btn btn-info"> Details</a>
            <form action="/dashboard/deletepackage/{{ $packagelist[$i]['p_id']}}" method="post">
              @csrf
              <button type="submit" name="submit" class="btn btn-danger"> Delete </button> 
          </form>
            
        </td>
      </tr>
      @endfor
    </tbody>
  </table>
@endsection