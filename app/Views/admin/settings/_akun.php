<div class="card">
    <div class="card-body">
        <form action="/pengaturan/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">No Whatsapp</label>
                <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" required>
            </div>
            <div class="form-group">
                <label for="description">Pesan</label>
                <textarea class="form-control" id="msg_whatsapp" name="msg_whatsapp" required></textarea>
            </div>
            <input type="hidden" name="form_type" value="akun">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>