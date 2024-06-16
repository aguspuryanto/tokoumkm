<?php
if(!empty($footer_sosmed) && is_array($footer_sosmed)) $footer_sosmed = $footer_sosmed[0];
?>
<form action="/home-page/store" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($footer_sosmed['id']) ? $footer_sosmed['id'] : '' ?>">
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Facebook</label>
                    <input type="text" class="form-control" id="link_facebook" name="link_facebook" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Instagram</label>
                    <input type="text" class="form-control" id="link_instagram" name="link_instagram" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Tiktok</label>
                    <input type="text" class="form-control" id="link_tiktok" name="link_tiktok" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Youtube</label>
                    <input type="text" class="form-control" id="link_youtube" name="link_youtube" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    p<label for="color">Link Profile Tokopedia</label>
                    <input type="text" class="form-control" id="link_tokopedia" name="link_tokopedia" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Shopee</label>
                    <input type="text" class="form-control" id="link_shopee" name="link_shopee" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <div class="custom-control custom-switch mt-4">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil">
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="color">Link Profile Lazada</label>
                    <input type="text" class="form-control" id="link_lazada" name="link_lazada" required>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <label class="d-none" for="tampil">Tampil</label>                
                    <select class="form-control d-none" id="tampil" name="tampil">
                        <option value="yes" <?= isset($footer_sosmed['tampil']) && $footer_sosmed['tampil'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                        <option value="no" <?= isset($footer_sosmed['tampil']) && $footer_sosmed['tampil'] == 'no' ? 'selected' : '' ?>>No</option>
                    </select>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="tampilSwitch1" name="tampil" <?= isset($footer_sosmed['tampil']) && $footer_sosmed['tampil'] == 'yes' ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="tampilSwitch1">Tampilkan</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="form_type" value="sosmed">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

