@extends('admin-side.layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Article Details</h2>
                    <p class="text-muted">Default tag: Quantumn Computer</p>
                </div>
                <div class="col" style="text-align-last: right;align-self:center;">
                  <button type="button" class="btn btn-danger"><span class="fe fe-trash fe-12 mr-2"></span>Delete</button>
                  <a href="{{route('admin.article.edit')}}" class="btn btn-primary"><span class="fe fe-filter fe-12 mr-2"></span>Edit</a>
                </div>   
            </div>
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Information</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group mb-3">
                    <label for="title" style="color: black;">Title</label>
                    <input type="text" id="title" class="form-control" placeholder="title..." value="this is title" disabled>
                  </div>
                  <div class="form-group mb-3">
                    <label for="select2_multiple" style="color: black;">Tag</label>
                    <select name="" id="select2_multiple" class="form-control" multiple style="width: 100%;" disabled>
                      {{-- <option></option> --}}
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="summary" style="color: black;">Summary</label>
                    <input type="text" id="summary" class="form-control" placeholder="summary..." value="this is summary" disabled>
                  </div>
                  <div class="form-group mb-3">
                    <label for="content-textarea" style="color: black;">Content</label>
                    <textarea name=text id="content-textarea" cols="30" rows="10" disabled></textarea>
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
            </div>
          </div> 
        </div>
      </div>
    </div> 
</main>

@endsection