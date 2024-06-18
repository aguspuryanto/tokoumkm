<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="formCategory" action="/category/store" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= isset($category['id']) ? $category['id'] : '' ?>">
                
                <div class="form-row">
                    <div class="form-group col-8">
                        <label for="category" class="d-none">Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="<?= isset($category['category']) ? $category['category'] : '' ?>" required>
                    </div>
                    <div class="form-group col-4">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>

            <ul class="list-group">
            <?php foreach($terms as $term): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $term['name'] ?>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>