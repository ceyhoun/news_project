@include('Admin/layouts/head')
@include('Admin/layouts/navbar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                  <h2>Yeni </h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">General Form</
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <div class="card card-success w-50">
                        <div class="card-header">
                            <h3 class="card-title">Yeni Xəbər Əlavə Et</h3>
                        </div>
                        <form method="post" action="{{route('addnews')}}" enctype="multipart/form-data">
                          @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="newstitle">Xəbər Başlığı</label>
                                    <input type="text" name="title" class="form-control" id="newstitle"
                                        placeholder="Xəbər Başlığı">
                                </div>
                                <div class="form-group">
                                    <label for="newscontent">Xəbər Mətni</label>
                                    <input type="content" name="content" class="form-control" id="newscontent"
                                        placeholder="Xəbər Mətni">
                                </div>
                                <div class="form-group">
                                  <select name="author" class="form-control">
                                    @foreach ($authors as $author)
                                      <option value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                <select name="categoryID" class="form-control">
                                  @foreach ($onlycategory as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                              <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Şekil </label>
                                  </div>
                                </div>
                              </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check" class="form-check-input" id="newsstatus">
                                    <label class="form-check-label" for="newsstatus" >Statusu</label>
                                </div>
                                <div class="form-check">
                                  <input type="checkbox" name="slider" class="form-check-input" id="newsstatus">
                                  <label class="form-check-label" for="newsstatus" >Slayderə Yüklənsin ?</label>
                              </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Xəbəri əlavə edin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('Admin/layouts/footer')
