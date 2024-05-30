<script>
  // full editor
  var fullEditor = new Quill("#{{$id}}", {
    bounds: "#{{$id}}",
    modules: {
      formula: true,
      syntax: true,
      toolbar: [
        [{
            font: []
          },
          {
            size: []
          }
        ],
        ["bold", "italic", "underline", "strike"],
        [{
            color: []
          },
          {
            background: []
          }
        ],
        [{
            script: "super"
          },
          {
            script: "sub"
          }
        ],
        [{
            header: "1"
          },
          {
            header: "2"
          },
          "blockquote",
          "code-block"
        ],
        [{
            list: "ordered"
          },
          {
            list: "bullet"
          },
          {
            indent: "-1"
          },
          {
            indent: "+1"
          }
        ],
        [
          "direction",
          {
            align: []
          }
        ],
        ["link", "image", "video", "formula"],
        ["clean"]
      ]
    },
    theme: "snow"
  });

  $('#{{ $id }} .ql-editor').on('keyup', function() {
      $('#{{ $id }}1').val($('#{{ $id }} .ql-editor').html())
  })
  
  $('#{{ $id }}').on('mouseover', function() {
      $('#{{ $id }}1').val($('#{{ $id }} .ql-editor').html())
  })
</script>