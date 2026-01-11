@extends('layouts.main')

@section('content')

<div class="section">
    <h1>Contact Us</h1>

    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="POST" action="/contact">
      @csrf
    <p>
        <label for="">Full Name</label><br>
        <input type="text" name="name" required />
    </p>

    <p>
        <label for="">Email Address</label><br>
        <input type="text" name="email" required>
    </p>
        <label for="">Message</label><br>
        <textarea name="message" rows="5" required></textarea>
    </p>
        <button type="submit" class="btn">Send Message</button>
    </form>
<br>
<p>
  <h1>Contact Us</h1>
  <p>Phone: +255 655 478 996 | +255 688 678 996</p>
  <p>Email: info@mulokozihighschool.ac.tz</p>
</p>
@endsection