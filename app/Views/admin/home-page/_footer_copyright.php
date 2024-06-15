<form action="/home-page/store" method="post">
            <div class="form-group">
                <label for="color">Copyright</label>
                <input type="text" class="form-control" id="copyright" name="copyright" value="<?= $footer_copyright['copyright']; ?>" required>
            </div>
            <div class="form-group">
                <label for="color">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $footer_copyright['tahun']; ?>" required>
            </div>
            <input type="hidden" name="form_type" value="copyright">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>