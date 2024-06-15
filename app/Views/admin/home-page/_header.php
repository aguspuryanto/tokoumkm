        <form action="/home-page/store" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="favicon">Favicon</label>
                <input type="file" class="form-control" id="favicon" name="favicon">
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
            </div>
            <div class="form-group col-md-6">
                <label for="color">Color</label>
                <div class="input-group colorpicker-component">
                    <input type="text" class="form-control" id="color" name="color" required>
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="tampil">Tampil</label>
                <select class="form-control" id="tampil" name="tampil">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <input type="hidden" name="form_type" value="header">
            <button type="submit" class="btn btn-primary">Add Setting</button>
        </form>