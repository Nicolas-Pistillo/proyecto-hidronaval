<div class="skew-contact-bg">
    <div class="container">
        <div id="contacto" class="contact-section mx-auto">
            <div class="bx-shadow d-flex flex-wrap overflow-hidden">
                <div class="col-12 col-md-12 col-lg-12 col-xl-7 p-5 write-us">
                    <h5 class="mb-5">Envíanos un mensaje</h5>
    
                    <?php if (isset($_SESSION['contact_return'])) {
                        echo $_SESSION['contact_return'];
                    } ?>
                
                    <form action="mail\mail_validations.php" method="POST" class="form-line">
                        <div class="row mb-3 gy-2">
                            <div class="col-md-12">
                                <div class="position-relative">
                                    <label for="fullname" class="form-label">Nombre Completo</label>
                                    <input type="text" class="input-effect" id="fullname" name="fullname" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 gy-2">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <label for="mail" class="form-label">Email</label>
                                    <input type="email" class="input-effect" id="mail" name="mail" required>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <label for="subject" class="form-label">Asunto</label>
                                    <input type="text" class="input-effect" id="subject" name="subject" required>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 gy-2">
                            <div class="col-md-12">
                                <div class="position-relative">
                                    <label for="text-content" class="form-label">Mensaje</label>
                                    <textarea required class="form-control input-effect" name="text-content" id="text-content" rows="3"></textarea>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn hidro-buttons text-uppercase mt-3">enviar mensaje</button>
                    </form>
                </div>
                <div class="col-xl-5 p-5 info-contact d-none d-xl-block">
                </div>
            </div>
        </div>
    </div>
</div>