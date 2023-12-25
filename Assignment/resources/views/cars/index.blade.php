@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card-title">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">All Cars</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col">
                    <div class="input-group mb-3">
                      <select id="filter_manufacturer_id" name="manufacturer_id" class="custom-select">
                        @foreach ($manufacturer as $id => $name)
                          <option {{ $id == request('manufacturer_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Model</th>
                  <th scope="col">Year</th>
                  <th scope="col">Salesperson Email</th>
                  <th scope="col">Manufacturer</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>       
                @foreach ($cars as $index => $car)
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ $car->model }}</td>
                  <td>{{ $car->year }}</td>
                  <td>{{ $car->salesperson_email }}</td>
                  <td>{{ $car->manufacturer->name }}</td>
                  <td width="150">
                    <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                    <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table> 
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
