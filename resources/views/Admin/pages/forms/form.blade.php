@include('Admin/layouts/head')
@include('Admin/layouts/navbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{route('news')}}"><button class="btn-outline-success form-control" type="submit">Yeni
                            Xəbər</button></a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- right column -->
                <div class="col-md">
                    <!-- Form Element sizes -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">News</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body p-0">
                          @if($data->count())
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Başlığı</th>
                                        <th>Mətni</th>
                                        <th>Foto</th>
                                        <th>Statusu</th>
                                        <th>Sil</th>
                                        <th>Yenile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @if (!empty($data) && count($data) > 0)
                                  @foreach ($data as $item)
                                  <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->content}}</td>
                                    <td><img width="50px" src="../../../{{$item->image}}" alt=""></td>
                                    <td>{{$item->status == 1 ? 'aktif' :'deaktif'}}</td>
                                    <td><a onclick="return confirm(`Silinsin mi ?`)" href="{{route('newsdelete',$item->id)}}"><button class="btn btn-outline-danger">Sil</button></a></td>
                                    <td><a href="{{route('newsedit',$item->id)}}"><button class="btn btn-outline-warning">Yenile</button></a></td>
                                  </tr>
                                  @endforeach
                                  @else
                                  <tr>
                                    <td colspan="6">Yoxdur</td>
                                  </tr>
                                  @endif
                                </tbody>
                            </table>
                            {{$data->links()}}
                          @else
                          <p>not data</p>
                          @endif
                        </div>
                        <!-- /.card-body -->
                    </div>


                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('Admin/layouts/footer')

&
