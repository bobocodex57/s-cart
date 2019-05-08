@if(Session::has('import_success'))
    <div class="alert alert-success">
        <b>List product success:</b><br>
        @foreach (Session::get('import_success') as $detail)
            {{ $detail }}<br>
        @endforeach
    </div>
@endif
@if(Session::has('import_error'))
    <div class="alert alert-danger">
        <b>List product error:</b><br>
        @foreach (Session::get('import_error') as $detail)
            {{ $detail }}<br>
        @endforeach
</div>
@endif
<div class="row">
 <div class="col-md-6">
<form method="post" action="" enctype="multipart/form-data">
<div>
<h3>{{ trans('language.process.product_info') }}</h3>
<br>{!! trans('language.process.product_info_note') !!}<br>
{!! trans('language.process.productImport_text') !!}: <span class="glyphicon glyphicon-download-alt"></span>
<a href="{{ asset('format/import_product.xls') }}">{{ trans('language.process.productImport_download') }}</a>
</div>
<div class="col-md-6 input-group file-caption-main ">
  <div class="form-group {!! !$errors->has('import_file_info') ?: 'has-error' !!}">
    @if($errors->has('import_file_info'))
        <span class="help-block">{{ $errors->first('import_file_info') }}</span>
    @endif
  </div>
</div>
{{ csrf_field() }}
   <input id="input-b2" name="import_file_info" type="file" class="file" data-show-preview="true">
   <input name="case" type="hidden" value="import_file_info">
</form>
</div>
</div>

<div class="row">
<div class="col-md-6">
<form method="post" action="" enctype="multipart/form-data">
<div>
<h3>{{ trans('language.process.product_description') }}</h3>
<br>{!! trans('language.process.product_description_note') !!}<br>
{!! trans('language.process.productImport_text') !!}: <span class="glyphicon glyphicon-download-alt"></span>
<a href="{{ asset('format/import_product_description.xls') }}">{{ trans('language.process.productImport_download') }}</a>
</div>
<div class="col-md-6 input-group file-caption-main ">
  <div class="form-group {!! !$errors->has('import_file_description') ?: 'has-error' !!}">
    @if($errors->has('import_file_description'))
        <span class="help-block">{{ $errors->first('import_file_description') }}</span>
    @endif
  </div>
</div>
{{ csrf_field() }}
   <input id="input-b2" name="import_file_description" type="file" class="file" data-show-preview="true">
   <input name="case" type="hidden" value="import_file_description">
</form>
</div>
</div>
