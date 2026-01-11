@extends('layouts.main')

@section('content')

<div class="section">
    <h1>About Mulokozi's High School</h1>
    <p>
        Mulokozi High School is a privately owned institution established to provide quality secondary education in a disciplined and supportive learning environment.
    </p>
</div>

<!-- Vision & Mission Section -->
<div class="section" style="background: #f4f6f8;">
    <h2>Our Vison</h2>
    <p>
       To be a leading secondary school producing responsible, skilled, and competent graduates.
    </p>
</div>

<div class="section">
    <h2>Our Mission</h2>
    <p>
        To provide quality education theough qualified teachers, modern teaching methods, and strong moral values.
    </p>
</div>

<!-- Leadership Section -->
<div class="section">
    <h2>School Leadership and Staff</h2>
    <div class="cards">
        <div class="card staff-card">
            <img src="{{ asset('images/staff/head.webp') }}" alt="">
            <h3>Head of School</h3>
            <p>Mr. John Mwangi</p>
            <p>Oversees academic performance, discipline, and overall school administration.</p>
        </div>
        <div class="card staff-card">
            <img src="{{ asset('images/staff/Grace.webp') }}" alt="">
            <h3>Deputy Head</h3>
            <p>Ms. Grace Njeri</p>
            <p>Assists the Head of School in managing daily operations and student affairs.</p>
        </div>
        <div class="card staff-card">
            <img src="{{ asset('images/staff/deputy.webp') }}" alt="">
            <h3>Academic Coordinator</h3>
            <p>Mr. Peter Otieno</p>
            <p>Responsible for curriculum implementation and teacher development.</p>
        </div>

        <div class="card staff-card">
            <img src="{{ asset('images/staff/staff.webp') }}" alt="">
            <h3>Teaching Staff</h3>
            <p>Qualified and experienced teachers committed to student success and discipline.</p>
        </div>
    </div>
</div>

<!-- Core Value -->
<div class="section" style="background: #f4f6f8;">
    <h2>Our Core Values</h2>
    <ul>
        <li>Excellence in Academics</li>
        <li>Discipline and Integrity</li>
        <li>Respect and Responsibility</li>
        <li>Innovation and Creativity</li>
        <li>Community Engagement</li>
    </ul>
</div>

<!-- Facilities Section -->
<div class="section">
    <h2>Our Facilities</h2>
    <p>
        The School has well-equipped classrooms, science laboratories, a library, sports grounds, and a safe learning environment that supports both academic and personal developement.
    </p>
</div>
@endsection