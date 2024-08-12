@include('Admin/layouts/head')
@include('Admin/layouts/navbar')

<div class="container">
    <button id="categoryForm" type="submit">bas</button>
</div>


<script>
    $(document).ready(function() {
      $('#categoryForm').click(function(e) { // Formu '#categoryForm' id'sine göre seçin
        e.preventDefault(); // Formun normal gönderimini engelleyin

        // SweetAlert ile bildirim gösterme
        Swal.fire({
          title: 'Başlık',
          text: 'Mesajınızı buraya yazabilirsiniz.',
          icon: 'success', // Bildirim ikonu (success, error, warning, info, question)
          confirmButtonText: 'Tamam' // Onay butonu metni
        });
      });
    });
  </script>
@include('Admin/layouts/footer')
