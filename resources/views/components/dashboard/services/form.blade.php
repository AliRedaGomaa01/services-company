<form class="form" action="{{ $formUrl }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ( $method == 'PATCH' )
      @method('PATCH')
    @endif
    <div class="form-body">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput3">Arabic Title</label>
                    <input type="text" class="form-control"  name="title_ar"
                        value="{{ $service->title_ar ?? old('title_ar') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="projectinput3">English Title</label>
                    <input type="text" class="form-control"  name="title_en"
                        value="{{ $service->title_en ?? old('title_en') }}">
                </div>
            </div>
        </div>

        @include('components.dashboard.text-editor', [
            'label' => 'Arabic Description',
            'id' => 'editor1',
            'textareaName' => 'description_ar',
            'value' => $service->description_ar ?? old('description_ar'),
        ])

        @include('components.dashboard.text-editor', [
            'label' => 'English Description',
            'id' => 'editor2',
            'textareaName' => 'description_en',
            'value' => $service->description_en ?? old('description_en'),
        ])

        <div class="col-md-6">
          <div class="form-group">
            <label>Choose Image [ 1920 × 1080 px  ] ( 16 : 9 )</label>
            <label id="projectinput7" class="file center-block">
                <input type="file" id="file" onchange="preview()" name="image">
                <span class="file-custom"></span>
            </label>
        </div>
        </div>

        @if ( isset($service->image->path) )
          <div class="col-md-6" id="old-image">
            old image
              <img src="{{ $service->image->publicPath }}" width="100%">
          </div>
        @endif

        <div class="col-md-6" id="new-image" style="display: none">
          uploaded image
            <img src="" id="frame" width="100%">
        </div>

        <div class="form-actions d-flex flex-row flex-wrap justify-content-start" style="gap:1em">
            <button type="reset" class="btn btn-warning">
                <i class="feather icon-x"></i> Cancel
            </button>

            <button type="submit" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> Save
            </button>
        </div>
</form>



@push('scripts')
    
    @include('components.dashboard.text-editor-script', [
        'id' => 'editor1',
        'value' => $service->description_ar ?? old('description_ar'),
    ])

    @include('components.dashboard.text-editor-script', [
        'id' => 'editor2',
        'value' => $service->description_en ?? old('description_en'),
    ])

    <script>
      function preview() {
        $('#old-image').hide()
        $('#new-image').show()
        frame.src = URL.createObjectURL(file.files[0])
      }
    </script>

@endpush
