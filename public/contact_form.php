<?php include_once "partials/header.php"; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <h4 class="text-center mb-4 fw-semibold">
                        <i class="bi bi-chat-dots-fill text-secondary"></i>
                        Get in Touch
                    </h4>

                    <form id="contactForm" action="submit.php" method="POST" enctype="multipart/form-data" novalidate>

                        
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input 
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter your full name"
                                required
                                minlength="2"
                                pattern="[A-Za-z\s]+"
                                autofocus
                            >
                            <div class="form-text">
                                Only letters and spaces (min 2 characters).
                            </div>
                        </div>

                       
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="example@email.com"
                                required
                            >
                            <div class="form-text">
                                We’ll never share your email.
                            </div>
                        </div>

                       
                        <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input
                                type="tel"
                                name="mobile"
                                class="form-control"
                                placeholder="10-digit mobile number"
                                required
                                pattern="[6-9][0-9]{9}"
                            >
                            <div class="form-text">
                                Must be a valid 10-digit Indian mobile number.
                            </div>
                        </div>

                       
                        <div class="mb-3">
                            <label class="form-label">Message (Optional)</label>
                            <textarea
                                name="message"
                                class="form-control"
                                rows="4"
                                maxlength="500"
                                placeholder="Write your message (max 500 characters)..."
                            ></textarea>
                        </div>

                       
                        <div class="mb-4">
                            <label class="form-label">Upload Image</label>
                            <input
                                type="file"
                                name="image"
                                class="form-control"
                                accept="image/jpeg"
                                required
                            >
                            <div class="form-text">
                                JPEG only, maximum size 500KB.
                            </div>
                        </div>

                       
                        <div class="d-grid">
                            <button type="submit" id="submitBtn" class="btn btn-success btn-lg" disabled>
                                <i class="bi bi-send-fill"></i> Submit Request
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<?php include "partials/footer.php"; ?>
