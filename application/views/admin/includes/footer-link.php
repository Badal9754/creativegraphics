<!-- JAVASCRIPT -->
<script src="<?= base_url() ?>assets/admin/libs/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/node-waves/waves.min.js"></script>

<!-- owl.carousel js -->
<script src="<?= base_url() ?>assets/admin/libs/owl.carousel/owl.carousel.min.js"></script>

<!-- auth-2-carousel init -->
<script src="<?= base_url() ?>assets/admin/js/pages/auth-2-carousel.init.js"></script>

<!-- App js -->
<script src="<?= base_url() ?>assets/admin/js/app.js"></script>
<!-- toastr plugin -->
<script src="<?= base_url() ?>assets/admin/libs/toastr/build/toastr.min.js"></script>

<!-- toastr init -->
<script src="<?= base_url() ?>assets/admin/js/pages/toastr.init.js"></script>

<!-- apexcharts -->
<script src="<?= base_url() ?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>

<script src="<?= base_url() ?>assets/admin/js/pages/dashboard.init.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url() ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>



<!-- Datatable init js -->
<script src="<?= base_url() ?>assets/admin/js/pages/datatables.init.js"></script>

<script>
    <?php
    if (sessionId('type') == 'info') {
    ?>
        toastr["info"]("Information", "<?= sessionId('message') ?>");
    <?php
    } elseif (sessionId('type') == 'success') {
    ?>
        toastr["success"]("Success Message", "<?= sessionId('message') ?>");
    <?php
    } elseif (sessionId('type') == 'error') {
    ?>
        toastr["error"]("Error Message", "<?= sessionId('message') ?>");
    <?php
    } elseif (sessionId('type') == 'info') {
    ?>
        toastr["info"]("Warning", "<?= sessionId('message') ?>");
    <?php
    } else {
    }
    if (sessionId('type')) {
        unset_userdata(['type', 'message']);
    }
    ?>
</script>
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    menubar:'',
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
</body>

</html>