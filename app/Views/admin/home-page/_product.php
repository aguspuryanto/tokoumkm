<form action="/home-page/store" method="post">
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
            <input type="hidden" name="form_type" value="product">
            <button type="submit" class="btn btn-primary">Add Setting</button>
        </form>