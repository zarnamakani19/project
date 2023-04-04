
@extends('Admin.Master')
@section('content')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form method="POST"  action="{{route('addproperti')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">housingname</label>
                  <div class="col-sm-10">
                    <input type="text" name="housingname" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">propertitype</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="propertitype" aria-label="Default select example">
                      <option selected value=""> Select your Properti</option>
                      <option value="villa">Villa</option>
                      <option value="flat">Flat</option>
                      <option value="row house">Row House</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" name="price" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Housetype</label>
                  <div class="col-sm-10">
                    <select class="form-select"   name="housetype" aria-label="Default select example">
                      <option selected value=""> Select your House</option>
                      <option value="2bhk">2bhk</option>
                      <option value="3bhk">3bhk</option>
                      <option value="4bhk">4bhk</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">sale_rent</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="sale_rent" aria-label="Default select example">
                      <option value="sale">sale</option>
                      <option value="rent">rent</option>
                      
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">City</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="city" aria-label="Default select example">
                      <option selected value=""> Select your city</option>
                      <option value="surat">Surat</option>
                      <option value="baroda">Baroda</option>
                      <option value="mumbai">Mumbai</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">state</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="state" aria-label="Default select example">
                      <option selected value=""> Select your state</option>
                      <option value="Gujrat">Gujrat</option>
                      
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control"  name="img" type="file" id="formFile">
                  </div>
                  </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary"   value="ADD" name="add">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>    
@endsection