@include('Admin/layouts/head')
@include('Admin/layouts/navbar')

<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
?>

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
                        <li class="breadcrumb-item active">General Form</ </ol>
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
                            <h3 class="card-title">Yeni Reklam Əlavə Et</h3>
                        </div>
                        <form method="post" id="advertForm" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="adverttitle">Reklam Başlığı</label>
                                    <input type="text" name="adtitle" class="form-control" id="advertstitle"
                                        placeholder="Reklam Başlığı">
                                </div>
                                <div class="form-group">
                                    <label for="nadvertcontent">Reklam Mətni</label>
                                    <input type="text" name="adcontent" class="form-control" id="advertcontent"
                                        placeholder="Reklam Mətni">
                                </div>
                                <div class="form-group">
                                    <label for="advertcontent">Reklam Linki</label>
                                    <input type="url" name="adurl" class="form-control" id="advertcontent"
                                        placeholder="Reklam Linki">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Reklam Şəkili</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="adimage" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Şekil </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="adcheck" class="form-check-input" id="advertstatus">
                                    <label class="form-check-label" for="advertstatus">Reklam Statusu</label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Reklamı əlavə edin</button>
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
        $('#advertForm').submit(function(e) {
            e.preventDefault();

            const Form = new FormData (this);

            $.ajax({
                type: "POST",
                url: "{{ route('addadvert') }}",
                data: Form,
                contentType: false,
                processData: false,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                  console.log(data);
                    if (data.status === "success") {
                        Swal.fire(data.title, data.message, "success");
                    } else {
                        Swal.fire(data.title, data.message, "warning");
                    }
                },
                error: function(xhr) {
                    Swal.fire('Xeta', 'Xeta Emele Geldi', 'error');
                }
            });
        });
    });
</script>
@include('Admin/layouts/footer')
