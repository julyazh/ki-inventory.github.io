<div class="modal fade" id="registerModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header p-2 align-item-start">
                <div class="d-flex flex-column justify-content-center w-100 align-items-center">
                    <img src="{{ url('img/logo.png') }}" width="50px" />
                    <h6>Pondok Pesantren Al-Ittihad</h6>
                    <p class="text-secondary">Karang Tengah Cianjur</p>
                    <h6>MASUK UNTUK MELANJUTKAN</h6>
                </div>
            </div>
            <div class="modal-body">
                <form class="mb-4">
                    <div class="row">
                        <div class="col">
                            <label class="" for="">Nama Depan</label>
                            <input type="text" class="form-control" id="firstname" placeholder="your first name here">
                        </div>
                        <div class="col">
                            <label class="" for="">Nama Belakang</label>
                            <input type="text" class="form-control" id="lastname" placeholder="your last name here">
                        </div>   
                    <div class="mb-3">
                        <label for="">Alamat Surel</label>
                        <input type="email" class="form-control" id="email" placeholder="yourmail@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Jenis Kelamin</label>
                        <select name="" id="gender" class="form-control">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">Unggah CV/Resume anda</label>
                        <input type="file" class="form-control" id="cv">
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">Ringkasan tentang anda</label>
                        <textarea class="form-control" id="cv" placeholder="describe your self"></textarea>
                    </div>
                    </div>
                    <hr class="my-3">
                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control">
                            <span class="input-group-text">
                                <i class="far fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi sandi</label>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control">
                            <span class="input-group-text">
                                <i class="far fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <button class="btn bg-primary rounded-pill w-100 py-2 text-white mb-4"> LANJUTKAN REGISTRASI</button>
            </div>
            <div class="modal-footer">
                <p class="text-center w-100">sudah memiliki akun ? <span class="text-primary" role="button" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk disini</span></p>
            </div>
        </div>
    </div>
</div>