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
                        <li class="breadcrumb-item active">General Form</li>
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
                            <h3 class="card-title">Yeni Yazar Əlavə Et</h3>
                        </div>
                        <form id="authorForm" method="post" enctype="multipart/form-data">
                          @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="authornameid">Yazar Adı</label>
                                    <input type="text" name="authorname" class="form-control" id="authornameid"
                                        placeholder="Yazar Adı">
                                </div>
                                <div class="form-group">
                                    <label for="authorsurnameid">Yazar Soyadı</label>
                                    <input type="text" name="authorsurname" class="form-control" id="authorsurnameid"
                                        placeholder="Yazar Soyadı">
                                </div>
                                <div class="form-group">
                                    <label for="authorimageid">Yazarın Şəkili</label>
                                    <input type="file" name="authorimage" class="form-control" id="authorimageid"
                                        placeholder="Yazar Şəkili">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="check" class="form-check-input" id="checkstatus">
                                    <label class="form-check-label" for="checkstatus">Statusu</label>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Yazarı əlavə edin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
   $(document).ready(function() {
    $('#authorForm').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        console.log('Form Data:', formData);

        $.ajax({
            type: "POST",
            url: "{{ route('addauthor') }}",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.status === "success") {
                    Swal.fire(data.title, data.message, "success");
                } else {
                    Swal.fire(data.title, data.message, "warning");
                }
            },
            error: function(xhr) {
                Swal.fire('Xeta', 'Xeta Bu qisimde', 'error');
            }
        });
    });
});

</script>
@include('Admin/layouts/footer')
