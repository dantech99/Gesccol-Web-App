<div>
   <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#content', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists link image textarea',
    block_formats: 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link | image | fontsize',
    font_size_formats: '8pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt 48pt'
  });

  tinymce.init({
    selector: 'textarea#description', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists link image textarea',
    block_formats: 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link | image | fontsize',
    font_size_formats: '8pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt 48pt'
  });
</script>
</div>