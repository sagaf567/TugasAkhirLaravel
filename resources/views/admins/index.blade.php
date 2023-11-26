@extends('layouts.app')
@section('content')
<nav>
    <i class='bx bx-menu'></i>
    <form action="index/search" method="GET">
        <div class="form-input">
            <input type="search" name="search" placeholder="Search...">
            <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
        </div>
    </form>
    <input type="checkbox" id="theme-toggle" hidden>
    <label for="theme-toggle" class="theme-toggle"></label>
</nav>
        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Data Post</h1>
                </div>
               
            </div>

            <!-- Insights -->
            <!-- End of Insights -->

            <div class="border-botom">
              <div class="container d-flex flex-wrap justify-content-center">
                <a href="{{ route('admins.create') }}"></a>
          <div class="container mt-5">
          <div class="row">
          <div class="col-md-12"> 
              <div class="card border-0 shadow-sm rounded">
                  <div class="card-body">
                    <a href="{{ route('admins.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th scope="col">GAMBAR</th>
                                  <th scope="col">JUDUL</th>
                                  <th scope="col">CONTENT</th>
                                  <th scope="col">AKSI</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($admins as $post)
                              <tr>
                                  <td class="text-center">
                                      <img src="{{ asset('/storage/admins/'.$post->image) }}" class="rounded" style="width: 150px">
                                  </td>
                                  <td>{{ $post->title }}</td>
                                  <td>{!! $post->content !!}</td>
                                  <td class="text-center">
                                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admins.destroy', $post->id) }}" method="POST">
                                          <a href="{{ route('admins.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                          <a href="{{ route('admins.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                      </form>
                                  </td>
                              </tr>
                              @empty
                              <div class="alert alert-danger">
                                  Data Admin belum <Tersedia class=""></Tersedia>
                              </div>
                              @endforelse
                          </tbody>
                      </table>
                      {{ $admins->links() }}
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>

                <!-- Reminders -->

                <!-- End of Reminders-->

            </div>

        </main>

    </div>
    @endsection
