<form action="/home-page/store" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-6">
                <label for="logo">Benefit 1</label>
                <input type="file" class="form-control" id="banner1" name="textarea">
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul1" name="judul1">
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan1" name="keterangan1"></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="logo">Benefit 2</label>
                <input type="file" class="form-control" id="banner2" name="banner2">
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul2" name="judul2">
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan2" name="keterangan2"></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="logo">Benefit 3</label>
                <input type="file" class="form-control" id="banner3" name="banner3">
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Judul</label>
                <input type="text" class="form-control" id="judul3" name="judul3">
            </div>
            <div class="form-group col-md-6">
                <label for="logo">Keterangan</label>
                <textarea rows="5" type="text" class="form-control" id="keterangan3" name="keterangan3"></textarea>
            </div>
            <div class="form-row">
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
                    <label for="tampil" class="d-none">Tampil</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="form_type" value="benefit">
            <button type="submit" class="btn btn-primary">Add Setting</button>
        </form>