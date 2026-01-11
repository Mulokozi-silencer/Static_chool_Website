@extends('layouts.main')

@section('content')
<!-- HERO SECTION-->
<div class="hero">
    <h1>Mulokozi High School</h1>
    <p>Quality Education | Discipline | Academic Excellence </p>
    <a href="/contact" class="btn">Apply for Admission</a>
</div>

<div class="section">
    <h2>Welcome to Mulokozi High</h2>
    <p>
        Mulokozi High School is committed to providing top-notch education and fostering a disciplined learning environment. Our dedicated staff and modern facilities ensure that students receive the best possible education to prepare them for future success.
    </p>
</div>

<div class="section">
    <h2>Our Academic Programs</h2>
    <div class="cards">
        <div class="card">
            <h3>O-Level Education</h3>
            <p>
                Strong foundation in sciences, arts, and business studies aligned with NECTA standards.
            </p>
        </div>
        <div class="card">
            <h3>A-Level Education</h3>
            <p>
                Advanced courses designed to prepare students for university and professional careers.
            </p>
        </div>
        <div class="card">
            <h3>Extracurricular Activities</h3>
            <p>
                A variety of clubs, sports, and arts programs to develop well-rounded individuals.
            </p>
        </div>
    </div>
</div>

<!-- Gallery -->
<div class="section">
    <h2>Why Choose Mulokozi High School?</h2>
    <p> Our facilities provide a safe and motivating learning atmosphere.</p>

    <div class="gallery">
        <img src="{{  asset('images/gallery/School1.jpg') }}" alt="">
        <img src="{{  asset('images/gallery/School2.jpg') }}" alt="">
        <img src="{{  asset('images/gallery/School3.jpg') }}" alt="">
    </div>
</div>

<!-- News & Announcement -->
<div class="section">
    <h2>News & Announcement</h2>

    <div class="news">
        <div class="news-item">
            <span class="news-date">10 January 2026</span>
            <h4>Form One Admission 2026</h4>
            <p>
                Mulokozi's Secondary School invites parents and guardians to apply for FOrm One Admission for the 2026 academic year.
            </p>
        </div>

        <div class="news-item">
            <span class="news-date">5 January 2026</span>
            <h4>School Reopening Notice </h4>
            <p>
                The School will reopen on 13th January 2026. All students are required to report on time.
            </p>
        </div>

        <div class="news-item">
            <span class="news-date">20 december 2025</span>
            <h4>NECTA Results Performance</h4>
            <p>
                We congratuate our students and teachers for the excellence performance in the 2025 NECTA examinations.
            </p>
        </div>
    </div>
</div>

<div class="section" style="background: #f4f6f8;">
    <h2>Contact Information</h2>
    <p>
        📍 Dar es Salaam, Tanzania <br>
        ☎ +255 655 478 996 | +255 88 678 996 <br>
        ✉ info@mulokozihigh.ac.tz
    </p>
</div>
@endsection