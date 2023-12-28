@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Car Details</strong>
          </div>           
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="model" class="col-md-3 col-form-label">Model</label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $cars->model }}</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="year" class="col-md-3 col-form-label">Year</label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $cars->year }}</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="salesperson_email" class="col-md-3 col-form-label">SalesPerson Email</label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $cars->salesperson_email }}</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="manufacturer_id" class="col-md-3 col-form-label">Manufacturer</label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $cars->manufacturer->name }}</p>
                  </div>
                </div>
                <hr>
                <div class="form-group row mb-0">
                  <div class="col-md-9 offset-md-3">
                      <a href="{{ route('cars.edit', $cars->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ route('cars.delete', $cars->id) }}" class="btn-delete btn btn-outline-danger" >Delete</a>
                      <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection