<form action="/settings/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="logo">Slider 1</label>
                <input type="file" class="form-control" id="slider1" name="logo">
            </div>
            <div class="form-group">
                <label for="logo">Slider 2</label>
                <input type="file" class="form-control" id="slider2" name="logo">
            </div>
            <div class="form-group">
                <label for="logo">Slider 3</label>
                <input type="file" class="form-control" id="slider3" name="logo">
            </div>
            <div class="form-group">
                <label for="logo">Slider 4</label>
                <input type="file" class="form-control" id="slider4" name="logo">
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
            <button type="submit" class="btn btn-primary">Add Setting</button>
        </form>