@extends('admin.layouts.app')
@section('page-title')
المنتجات
@endsection
@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title float-left">تعديل منتج</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" dir="rtl">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 control-label">اسم المنتج</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputName" placeholder="أدخل اسم المنتج" name='name'>
        </div>
      </div>

      <div class="form-group row mt-4">
        <label for="inputDescription" class="col-sm-2 control-label">الوصف</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="inputDescription" rows="3" placeholder="أدخل وصف القسم" name='description'></textarea>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info float-right">حفظ البيانات</button>
    </div>
    <!-- /.card-footer -->
  </form>
</div>
@endsection

