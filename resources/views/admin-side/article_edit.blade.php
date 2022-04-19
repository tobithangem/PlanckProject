@extends('admin-side.layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Edit Article</h2>
          <p class="text-muted">Default tag: Quantumn Computer</p>
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Information</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group mb-3">
                    <label for="title" style="color: black;">Title</label>
                    <input type="text" id="title" class="form-control" placeholder="title..." value="this is title">
                  </div>
                  <div class="form-group mb-3">
                    <label for="select2_multiple" style="color: black;">Tag</label>
                    <select name="" id="select2_multiple" class="form-control" multiple style="width: 100%;" value="Technology"> 
                      {{-- <option></option> --}}
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="summary" style="color: black;">Summary</label>
                    <input type="text" id="summary" class="form-control" placeholder="summary..." value="this is summary">
                  </div>
                  <div class="form-group mb-3">
                    <label for="content-textarea" style="color: black;">Content</label>
                    <textarea name=text id="content-textarea" cols="30" rows="10" value="this is content"></textarea>
                    <script src={{ url('ckeditor/ckeditor.js') }}></script>
                    <script>
                      let value = "this is content";
                      CKEDITOR.replace( 'content-textarea', {
                          filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
                      } );
                      CKEDITOR.instances['content-textarea'].setData(value);
                    </script>
                    @include('ckfinder::setup')
                  </div>
                </div>
              </div>
              <button class="btn btn-success" style="color: white;">Save</button>
            </div>
          </div> 
        </div>
      </div>
    </div> 
</main>

@endsection