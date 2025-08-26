<?php echo $this->extend('Back/Layout/main'); ?>

<?php echo $this->section('title');?>

<?php echo $title  ?? ''; ?>

<?php echo $this->endSection('title');?>

<?php echo $this->section('css');?>



<?php echo $this->endSection('');?>


<?php echo $this->section('content');?>

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title ?? 'Home'?></h1>
    <?php echo $user?>
</div>
<!-- /.container-fluid -->

<?php echo $this->endSection('');?>

<?php echo $this->section('scripts');?>



<?php echo $this->endSection('');?>