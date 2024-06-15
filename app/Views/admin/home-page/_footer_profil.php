<form action="/home-page/store" method="post">
            <div class="form-group">
                <label for="color">Nama Usaha</label>
                <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
            </div>
            <div class="form-group">
                <label for="color">No Whatsapp</label>
                <input type="text" class="form-control" id="wa_usaha" name="wa_usaha" required>
            </div>
            <div class="form-group">
                <label for="color">Alamat Usaha</label>
                <textarea rows="4" class="form-control" id="alamat_usaha" name="alamat_usaha" required></textarea>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <div class="form-group">
                <label for="tampil">Tampil</label>
                <select class="form-control" id="tampil" name="tampil">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <input type="hidden" name="form_type" value="profil">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>