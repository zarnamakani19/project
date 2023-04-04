@extends('Admin.Master')
@section('content')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        </div>

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">Property_type</th>
                    <th scope="col">price</th>
                    <th scope="col">house_type</th>
                    <th scope="col">sales_rent</th>
                    <th scope="col">city</th>
                    <th scope="col">state</th>
                    
                    <th scope="col">images</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($properties as $properties)
                  <tr>
                  <td>{{$properties->id}}</td>
                  <td>{{$properties->housing_name}}</td>
                  <td>{{$properties->Property_type}}</td>
                    <td>{{$properties->price}}</td>
                    <td>{{$properties->house_type}}</td>
                    <td>{{$properties->sales_rent}}</td>
                    <td>{{$properties->city_id}}</td>
                    <td>{{$properties->state_id}}</td>
                    <td>{{$properties->images}}</td>
                    <td>{{$properties->Action}}
                    <a href="{{route('addproperti')}}" class="btn btn-primary">EDIT</a>
                   <form action="{{route('deletepro',$properties->id)}}"  method="post">
                   @method('delete')
                      @csrf
                      <input type="submit" class="btn btn-danger" value="DELETE">

                   </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
  