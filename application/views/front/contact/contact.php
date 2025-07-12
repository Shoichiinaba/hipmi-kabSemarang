    <!-- Main -->
    <main>
        <!-- Banner -->
        <div class="section position-relative"
            style="background-image: url(image/dummy-img-1920x900.jpg); height: 70vh;">
            <div class="bg-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="d-flex flex-column w-100 h-100 justify-content-center text-white gap-3"
                    style="max-width: 895px;">
                    <h1 class="font-1 m-0 text-white fw-semibold">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Landing/contact'); ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Section Contact Us -->
        <div class="section">
            <div class="r-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-3 h-100 justify-content-center pe-xl-5">
                            <div class="d-flex flex-column gap-3">
                                <div class="linear-gradient">
                                    <span class="font-2 accent-color-3">Get In Touch</span>
                                </div>
                                <h3 class="font-1 fw-bold">Contact Support Team To Grow Your Business</h3>
                                <p class="text-color-2">Secretariat of the Regional Governing Body of the Indonesian
                                    Young Entrepreneurs Association Kota Semarang</p>
                            </div>
                            <h4>Contact Detail</h4>
                            <div class="row row-cols-xl-2">
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-classic-phone fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Phone</h5>
                                            <span style="font-size: 12px;">
                                                +62 859-4138-420
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-envelope fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Email</h5>
                                            <span style="font-size: 12px;">
                                                Hipmi-KabSemarang@dipo.com
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-xl-2">
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-location fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Location</h5>
                                            <span style="font-size: 12px;">
                                                Sraten Satu, Kec. Tuntang, Kabupaten Semarang, Jawa Tengah 50773
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div
                                        class="d-flex flex-row gap-3 bg-accent-3 p-3 align-items-center rounded-pill h-100">
                                        <div class="icon-box">
                                            <i class="rtmicon rtmicon-globe fs-1 accent-color"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h5>Website</h5>
                                            <span style="font-size: 12px;">
                                                https://hipmi.ndpro.id/
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column p-5 rounded-4 w-100 shadow">
                            <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-pill my-4"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                        <i class="fa-solid fa-check f-36 text-success"></i>
                                        Your Message Successfully Send.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-pill"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                        <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                        Something Wrong ! Send Form Failed.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <form
                                class="d-flex flex-column h-100 justify-content-center px-4 w-100 needs-validation form"
                                novalidate>
                                <div class="mb-3">
                                    <input type="text" class="form-control py-3 px-4" name="name" id="name"
                                        placeholder="Name" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div class="row row-cols-xl-2 row-cols-1">
                                    <div class="col mb-3">
                                        <input type="email" class="form-control py-3 px-4" name="email" id="email"
                                            placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <input type="tel" class="form-control py-3 px-4" name="phone" id="phone"
                                            placeholder="Phone" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control py-3 px-4" id="message" name="message" rows="5"
                                        placeholder="Your Message"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="btn btn-accent submit_form py-3 w-100 d-flex justify-content-center gap-2 rounded-pill">
                                        Send Message
                                        <i class="rtmicon rtmicon-arrow-up-right fs-6 fw-semibold"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section p-0">
            <iframe loading="lazy" class="maps overflow-hidden"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11193.057324826901!2d110.46058315944187!3d-7.315269772816467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a788bef17380f%3A0x9397571f5665dabb!2sSraten%20Satu%2C%20Gedangan%2C%20Kec.%20Tuntang%2C%20Kabupaten%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1752309825396!5m2!1sid!2sid"
                title="HIPMI KAB. Semarang" aria-label="HIPMI KAB. Semarang"></iframe>
        </div>
    </main>