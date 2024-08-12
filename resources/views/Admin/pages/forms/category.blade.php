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
                            <h3 class="card-title">Yeni Kataqoriya Əlavə Et</h3>
                        </div>
                        <form id="categoryForm" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="newstitle">Kataqoriya Başlığı</label>
                                    <input type="text" name="cattitle" class="form-control" id="newstitle"
                                        placeholder="Xəbər Başlığı">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="catcheck" class="form-check-input" id="newsstatus">
                                    <label class="form-check-label" for="newsstatus">Statusu</label>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Xəbəri əlavə edin</button>
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
      $('#categoryForm').submit(function(e) { // Formu '#categoryForm' id'sine göre seçin
          e.preventDefault(); // Formun normal gönderimini engelleyin

          $.ajax({
              type: "POST",
              url: "{{ route('addcategory') }}",
              data: $(this).serialize(), // Form verilerini serialize edin
              dataType: "json", // Gelen veri tipi JSON olarak bekleniyor
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function(response) {
                  if (response.status === "success") {
                      Swal.fire(response.title, response.message, "success");
                  } else {
                      Swal.fire(response.title, response.message, "warning");
                  }
              },
              error: function(xhr) { // Hata durumunda
                  swal('Xeta', 'Xeta Emele Geldi', 'error');
              }
          });

      });
  });
</script>


@include('Admin/layouts/footer')
