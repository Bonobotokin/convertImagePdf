<!DOCTYPE html>
<html>

<head>
    <title>PDF to Image Conversion</title>
</head>

<body>
    <h1>Convert PDF to Images</h1>
    <form action="<?php echo e(route('convertToImage')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="pdf_file">
        <button type="submit">Convert</button>
    </form>
</body>

</html><?php /**PATH /home/tsangamila/convertImagePdf/resources/views/pdf_to_image.blade.php ENDPATH**/ ?>