<!-- quill editor start -->
<section class="quill-editor">
  <!-- full Editor start -->
  <section class="full-editor">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ $label}}</h4>
            <a class="heading-elements-toggle"><i class="feather icon-ellipsis-h font-medium-3"></i></a>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div class="row">
                <div class="offset-md-2 col-md-8">
                  <div id="full-wrapper">
                    <div id="full-container">
                      <div class="editor" id='{{ $id }}'>
                        {!! $value ?? '' !!}
                      </div>
                      <textarea name="{{ $textareaName }}" id="{{ $id . '1' }}" class="d-none">
                        {!! $value ?? '' !!}
                      </textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- full Editor end -->
</section>
<!-- quill editor end -->