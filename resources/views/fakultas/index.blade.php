@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Fakultas</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
            <a href="{{ route('fakultas.index') }}" class="pull-right">
              <button type="button" class="btn btn-info">All Data</button>
            </a>
          </div>
          <div class="card-header">
            <a href="{{ route('fakultas.create') }}">
              <button type="button" class="btn btn-primary">Add New</button>
            </a>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Code</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($data as $key => $fakultas)
                <tr>
                  <td></td>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $fakultas->name }}</td>
                  <td>{{ $fakultas->id }}</td>
                  <td>
                  <a href="{{ route('fakultas.edit', ['id' => $fakultas->id]) }}">
                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                  </a>
                  <a href="{{ route('fakultas.delete', ['id' => $fakultas->id]) }}" onclick="return confirm('Delete data?');">
                    <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                  </a>
                </tr>
               @empty
                <tr>
                  <td colspan="3"><center>Data kosong</center></td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
            </nav>
            {{ $data->links() }}
          </div>
        </div>
      </div>  
  </div>
</section>
@endsection()