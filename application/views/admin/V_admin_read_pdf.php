<?php include "V_login_admin_head.php"; ?>

<div id="readPdf"></div>

<script>PDFObject.embed("<?php echo base_url(); ?>file_pdf_mou/<?php echo $file_pdf; ?>", "#readPdf");</script>

<?php include "V_login_admin_foot.php"; ?>