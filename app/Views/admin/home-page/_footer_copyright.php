<form action="/home-page/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="color">Copyright</label>
                <input type="text" class="form-control" id="copyright" name="copyright" required>
            </div>
            <div class="form-group">
                <label for="color">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" required>
            </div>
            <input type="hidden" name="formtype" value="copyright">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>