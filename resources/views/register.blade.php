<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('img/titleLogo.png') }}" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
        />

        <script src="jquery-3.6.3.min.js"></script>

        <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/root.css') }}" />

        <title>Career Seeker</title>
    </head>

    <body class="home">
        <div id="nav-bg"></div>
        <nav class="navbar navbar-expand-lg">
            <div class="nav container-xxl">
                <a href="home">
                    <img src="{{ asset('img/Logo.png') }}" alt="" />
                </a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vacancy">Vacancy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="career-tips"
                                >Career Tips</a
                            >
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Help
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">FAQ</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Contact Us</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a href="login" class="login collapse show">
                    <!-- Not Logged In -->
                    <button type="button" id="btn-signin">
                        Sign In
                        <div class="arrow-wrapper">
                            <div class="arrow"></div>
                        </div>
                    </button>
                </a>
                <a href="profile-seeker" class="profile collapse">
                    <!-- Not Logged In -->
                    <span class="material-icons md-48"> account_circle </span>
                    <span class="profile">My Profile</span>
                </a>
            </div>
        </nav>
        <div class="hero container-fluid">
            <div class="image-copy-content">
                <img src="{{ asset('img/register.png') }}" alt="">
                <div class="copy">
                    <p class="text-title">Discover Endless Opportunities With Us</p>
                    <p class="text-desc">Lorem ipsum dolor sit amet consectetur. Fermentum id facilisis ultrices aliquet. Semper in euismod cursus euismod non ornare turpis sit a. Molestie lectus nullam proin justo faucibus pharetra facilisis. Consectetur iaculis senectus pellentesque sem a. Libero donec nullam sed in pretium nulla massa nunc pulvinar. Tortor enim turpis fringilla pellentesque. Blandit maecenas ultricies mauris erat cras lectus nisl. Dictum enim diam vel libero suspendisse eget scelerisque. Diam lectus pellentesque sed scelerisque.</p>
            </div>
                </div>
            <div class="register-content">
                <div class="hero-text">Register as Employer</div>
                <form class="form" method="post" action>
                    <label for="fullname">Fullname</label>
                    <div class="usrpw">
                        <input
                            id="fullname"
                            class="input"
                            placeholder="Enter Your Name"
                            required=""
                            type="text"
                        />
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <label for="email">Email</label>
                    <div class="usrpw">
                        <input
                            id="email"
                            class="input"
                            placeholder="Enter Your Email"
                            required=""
                            pattern="[^@\s]+@[^@\s]+\.[^@\s]+"
                            type="text"
                        />
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <label for="number">Phone Number</label>
                    <div class="usrpw">
                        <input
                            id="number"
                            class="input"
                            placeholder="Enter Your Phone Number"
                            required=""
                            type="number"
                        />
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <label for="DoB">Date of Birth</label>
                    <div class="usrpw">
                        <button></button>
                        <input
                            id="DoB"
                            class="input"
                            placeholder="Enter Your Date of Birth"
                            required=""
                            type="date"
                        />
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <label for="address">Address</label>
                    <div class="usrpw">
                        <input
                            id="address"
                            class="input"
                            placeholder="Enter Your Address"
                            required=""
                            type="text"
                        />
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <label for="last-edu">Last Education</label>
                    <div class="usrpw">
                        <select id="last-edu" class="input" required="">
                            <option value="" disabled selected>
                                -- Select Your Last Education --
                            </option>
                            <option value="high-school">
                                High School / Secondary School
                            </option>
                            <option value="vocational">
                                Vocational School / Trade School
                            </option>
                            <option value="diploma">
                                Diploma / Associate Degree
                            </option>
                            <option value="bachelor">
                                Bachelor's Degree / Undergraduate Degree
                            </option>
                            <option value="master">
                                Master's Degree / Graduate Degree
                            </option>
                            <option value="doctorate">
                                Doctorate / PhD Degree
                            </option>
                        </select>
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <label for="pw">Password</label>
                    <div class="usrpw">
                        <input
                            id="pw"
                            class="input"
                            placeholder="Enter Your Password"
                            required=""
                            type="password"
                        />
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <label for="pw2">Re-enter Password</label>
                    <div class="usrpw">
                        <input
                            id="pw2"
                            class="input"
                            placeholder="Re-enter Your Password"
                            required=""
                            type="password"
                        />
                        <button class="reset" type="reset">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <input type="checkbox" />
                        I agree to the
                        <a href="register" class="tac">terms and conditions</a>
                    </div>
                    <button id="btn-login" type="submit">
                        Register
                        <div class="arrow-wrapper">
                            <div class="arrow"></div>
                        </div>
                    </button>
                </form>
            </div>
        </div>

        <footer class="footer container-fluid">
            <div id="connect">
                Connect With Us
                <div class="social-icon">
                    <a href="linked.com"
                        ><img src="{{ asset('icon/linkedin.png') }}" alt=""
                    /></a>
                    <a href="facebook.com"
                        ><img src="{{ asset('icon/fb.png') }}" alt=""
                    /></a>
                    <a href="twitter.com"
                        ><img src="{{ asset('icon/twt.png') }}" alt=""
                    /></a>
                </div>
            </div>

            <div id="explore">
                Explore
                <ul class="navigation">
                    <li>
                        <a href="#">Company List</a>
                    </li>
                    <li>
                        <a href="#">Career Tips</a>
                    </li>
                    <li>
                        <a href="#">Testimonials</a>
                    </li>
                </ul>
            </div>

            <div id="support">
                Support
                <ul class="navigation">
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Visit Us</a>
                    </li>
                </ul>
            </div>

            <div id="copyright">
                <a href=""
                    ><img src="{{ asset('img/Logo-outline.png') }}" alt=""
                /></a>
                © 2023 Career Seeker, All Rights Reserved.
            </div>
        </footer>

        <script src="{{ asset('js/logic.js') }}"></script>
        <script src="{{ asset('js/register.js') }}"></script>
    </body>
</html>
