@include('layouts.head')

@include('layouts.navbar')

@include('layouts.main_sidebar')

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">الاحصائيات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
              <li class="breadcrumb-item active">الرئيسة</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
       <div class="row">
  <div class="col-md-4">
    <div class="card">
      <img src="{{asset('')}}" style='height:80px;' class="card-img-top" alt="Product Name">
      <div class="card-body">
        <h5 class="card-title">اسم المنتج</h5>
        <p class="card-text">وصف موجز للمنتج</p>
        <p class="card-text"><strong>السعر: $99.99</strong></p>
        <a href="#" class="btn btn-primary">عرض التفاصيل</a>
      </div>
    </div>
  </div>
  <!-- كرر هذا لكل منتج -->
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('layouts.footer')