@extends('index')
@push('style')
    <title>Portfolio - Home</title>
@endpush
@section('main-content')
    <header>
        <div class="logo"><i>Sourov</i></div>

        <div class="hamburger" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav id="navbar">
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#About">About Me</a></li>
                <li><a href="#Skills">Skills</a></li>
                <li><a href="#portfolio">Projects</a></li>
                <li><a href="#experiences">Experiences</a></li>
                <li><a href="#achievements">Achievements</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="assets/Sourov_Resume.pdf" download class="resume-btn">Resume</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="section hero">
        <div class="hero-container">
            <div class="hero-text">
                <h5>WELCOME TO MY PORTFOLIO</h5>
                <h1>Hi, I'm <span class="highlight">Mahamudul Hasan Sourov</span><br><span class="typed-text"></span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, enim</p><br>
                <h2>Find Me</h2>
                <div class="social-buttons">
                    <a href="https://facebook.com" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com" target="_blank" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/images/p3.png" alt="Sourov">
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- About Me -->
    <section id="About" class="section">
        <div class="section-header">
            <h2 class="head">About Me</h2>
        </div>
        <div class="about-container">
            <div class="about-image">
                <img src="assets/images/profile1.jpg" alt="Sourov">
            </div>
            <div class="about-text">
                <p>I am a passionate developer focused on crafting quality user experiences across web and mobile platforms.
                    Currently pursuing BSc in Computer Science.</p><br><br>
                <h3>Education :</h3>
                <div class="education-box">
                    <ul class="education-list">
                        <li><strong>2022 - Ongoing:</strong> BSc in Computer Science & Engineering<br>Daffodil International
                            University</li>
                        <li><strong>2018:</strong> HSC, Dr. Mahbubur Rahman Mollah College</li>
                        <li><strong>2016:</strong> SSC, Bhola Government High School</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Skills -->

    <section id="Skills" class="section">
        <div class="section-header">
            <h2 class="head">Skills</h2>
        </div>
        <div class="cards-container">
            <div class="card skill-card">
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, delectus?</p>
            </div>
            <div class="card skill-card">
                <h3>Python | C++ | C</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, in.</p>
            </div>
            <div class="card skill-card">
                <h3>ML & DL</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, blanditiis!</p>
            </div>
            <div class="card skill-card">
                <h3>Artificial Intelligence</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, consequuntur?</p>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- Projects -->
    <section id="portfolio" class="section">
        <div class="section-header">
            <h2 class="head">Projects</h2>
            <p>Visit my portfolio and keep your feedback</p>
        </div>
        <div class="cards-container portfolio-grid">
            <div class="card">
                <img src="assets/images/nft.webp" alt="Sourov">
                <h3>E-com Project</h3>
                <div class="github-btn-wrapper">
                    <a href="https://github.com/mahamudsourov" class="github-btn" target="_blank">View on
                        GitHub</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/nft.webp" alt="Sourov">
                <h3>Lost & Found</h3>
                <div class="github-btn-wrapper">
                    <a href="https://github.com/mahamudsourov" class="github-btn" target="_blank">View on
                        GitHub</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/nft.webp" alt="Sourov">
                <h3>E-com Project</h3>
                <div class="github-btn-wrapper">
                    <a href="https://github.com/mahamudsourov" class="github-btn" target="_blank">View on
                        GitHub</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/nft.webp" alt="Sourov">
                <h3>E-com Project</h3>
                <div class="github-btn-wrapper">
                    <a href="https://github.com/mahamudsourov" class="github-btn" target="_blank">View on
                        GitHub</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/nft.webp" alt="Sourov">
                <h3>E-com Project</h3>
                <div class="github-btn-wrapper">
                    <a href="https://github.com/mahamudsourov" class="github-btn" target="_blank">View on
                        GitHub</a>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/nft.webp" alt="Sourov">
                <h3>E-com Project</h3>
                <div class="github-btn-wrapper">
                    <a href="https://github.com/mahamudsourov" class="github-btn" target="_blank">View on
                        GitHub</a>
                </div>
            </div>
        </div>
    </section>


    <div class="section-divider"></div>


    <!-- Experiences -->
    <section id="experiences" class="section">
        <div class="section-header">
            <h2 class="head">Experiences</h2>
            <p>Where I've worked and what I've learned along the way</p>
        </div>
        <div class="experience-container reveal">
            <div class="experience-item">
                <div class="experience-dot"></div>
                <div class="experience-content">
                    <h3>Web Developer</h3>
                    <span class="experience-org">Remote · 2024 - Present</span>
                    <p>Developed multiple full-stack web apps using Laravel and Vue. Handled payments, REST APIs, and client
                        communication.</p>
                </div>
            </div>
            <div class="experience-item">
                <div class="experience-dot"></div>
                <div class="experience-content">
                    <h3>Intern.</h3>
                    <span class="experience-org">Dhaka · Jan 2024 - Apr 2024</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, deserunt.</p>
                </div>
            </div>
            <div class="experience-item">
                <div class="experience-dot"></div>
                <div class="experience-content">
                    <h3>Volunteer Researcher - 4IR Lab</h3>
                    <span class="experience-org">DIU · 2024</span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, laboriosam amet harum fugiat culpa molestiae.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    {{-- Achivements --}}

    <section id="achievements" class="section">
        <div class="section-header">
            <h2 class="head">Achievements</h2>
            <p>Key recognitions and certifications I've earned</p>
        </div>

        <div class="achievements-container">
            <div class="achievement-card">
                <img src="assets/images/nft.webp" alt="">
                <div class="achievement-text">
                    <h3>AI Certificate - Microsoft</h3>
                    <p>AgentX competition by Microsoft.</p>
                </div>
            </div>

            <div class="achievement-card">
                <img src="assets/images/cert2.jpg" alt="">
                <div class="achievement-text">
                    <h3>ML Certification - Coursera</h3>
                    <p>Completed Deep Learning Specialization by Andrew Ng on Coursera (2023).</p>
                </div>
            </div>

            <div class="achievement-card">
                <img src="assets/images/cert3.jpg" alt="">
                <div class="achievement-text">
                    <h3>Best Poster Award</h3>
                    <p>Awarded at DIU Research Fair 2023 for presenting novel AI approach.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>


    <!-- Contact -->
    <section id="contact" class="section">
        <div class="section-header">
            <h2 class="head">Contact With Me</h2>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-box">
                    <p><strong>Email:</strong><br>sourov@example.com</p>
                </div>
                <div class="contact-box">
                    <p><strong>Phone:</strong><br>+880 1234 567890</p>
                </div>
                <div class="contact-box">
                    <p><strong>Location:</strong><br>YKSG2, Daffodil International University</p>
                </div>
            </div>
            <form class="contact-form">
                <input type="text" placeholder="Your Name" required />
                <input type="text" placeholder="Phone Number" required />
                <input type="email" placeholder="Email" required />
                <input type="text" placeholder="Subject" required />
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2025. All rights reserved by Sourov.</p>

        <div class="footer-social">
            <a href="https://github.com" target="_blank" title="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>

            <a href="https://facebook.com" target="_blank" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>

        </div>
    </footer>
@endsection
