<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Tambah Artikel</h1>

        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/articles/_form') ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>

<script>
function slugify(content) {
	return content.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
}

$(document).ready(function() {
    $('#judul').mouseleave(function() {
        $('#slug').val(slugify($(this).val()));
    });
});
</script>