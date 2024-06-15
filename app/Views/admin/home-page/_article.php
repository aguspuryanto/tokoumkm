<form action="/home-page/store" method="post">
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
            <input type="hidden" name="form_type" value="article">
            <button type="submit" class="btn btn-primary">Add Setting</button>
        </form>