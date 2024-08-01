@extends('admin.layouts.app')
@section('page-title')
الاقسام
@endsection
@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title float-left">إضافة قسم جديد</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="{{ route('admin.categories.store') }}" method="POST" dir="rtl">
      @csrf
      <div class="card-body">
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 control-label">اسم القسم</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="أدخل اسم القسم" name='name' value="{{ old('name') }}">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
      </div>

      <div class="form-group row mt-4">
        <label for="inputDescription" class="col-sm-2 control-label">الوصف</label>
        <div class="col-sm-10">
            <textarea class="form-control @error('description') is-invalid @enderror" id="inputDescription" rows="3" placeholder="أدخل وصف القسم" name='description'>{{ old('description') }}</textarea>
            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
      </div>
          
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 control-label">الكاتيجوري الأب</label>
        <div class="col-sm-10">
        <select class="form-control @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id">
            <option value="">بدون أب (رئيسية)</option>
                @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
        </select>        </div>
                    @error('parent_id')<div class="invalid-feedback">{{ $message }}</div>@enderror

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

