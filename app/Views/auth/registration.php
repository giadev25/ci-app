<?= $this->extend('layouts/auth'); ?>

<?= $this->section('content'); ?>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url(); ?>/auth/regis_process">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" name="registrasi">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url(); ?>/auth/login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>