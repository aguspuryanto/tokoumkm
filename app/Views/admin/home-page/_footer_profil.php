<form action="/home-page/store" method="post">
            <div class="form-group col-md-6">
                <label for="color">Nama Usaha</label>
                <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
            </div>
            <div class="form-group col-md-6">
                <label for="color">No Whatsapp</label>
                <input type="text" class="form-control" id="wa_usaha" name="wa_usaha" required>
            </div>
            <div class="form-group col-md-6">
                <label for="color">Alamat Usaha</label>
                <textarea rows="4" class="form-control" id="alamat_usaha" name="alamat_usaha" required></textarea>
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
                <div class="custom-control custom-switch mt-4">
                    <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                    <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                </div>
            </div>
            <input type="hidden" name="form_type" value="profil">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>