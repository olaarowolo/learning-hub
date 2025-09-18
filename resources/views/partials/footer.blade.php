<footer>
  <div class="footer-container">

    <!-- About -->
    <div class="footer-column">
      <h4>About Learning Hub</h4>
      <p>
        Learning Hub provides interactive, curriculum-aligned educational resources for students in the UK. Helping children build confidence and mastery in core subjects.
      </p>
      <p id="copyright-year">© {{ date('Y') }} OA Tutors</p>
    </div>

    <!-- Quick Links -->
    <div class="footer-column">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="{{ url('/index.html') }}">Home</a></li>
        <li><a href="{{ url('/maths.html') }}">Maths</a></li>
        <li><a href="{{ url('/english.html') }}">English</a></li>
        <li><a href="{{ url('/contact.html') }}">Contact</a></li>
        <li><a href="{{ url('/privacy.html') }}">Privacy Policy</a></li>
        <li><a href="{{ url('/safeguarding.html') }}">Safeguarding</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div class="footer-column">
      <h4>Resources</h4>
      <ul>
        <li><a href="{{ url('/activities.html') }}">Activities</a></li>
        <li><a href="{{ url('/worksheets.html') }}">Worksheets</a></li>
        <li><a href="{{ url('/blog.html') }}">Blog</a></li>
      </ul>
    </div>

      <!-- Contact & Social -->
      <div class="footer-column">
        <h4>Contact & Follow Us</h4>
        <p>Email: <a href="mailto:info@oatutors.co.uk">info@oatutors.co.uk</a></p>
        <p>Phone: <a href="tel:+441234567890">+44 123 456 7890</a></p>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

  </div>

  <!-- Bottom Bar -->
  <div class="footer-bottom">
    <p>Designed & Developed by <a href="https://oatutors.co.uk">OA Tutors</a>  • All Rights Reserved •  <a href="{{ url('/terms.html') }}">Terms of Service</a></p> <a href="{{ url('/privacy.html') }}">Privacy Policy</a> • <a href="{{ url('/safeguarding.html') }}">Safeguarding</a></p>
  </div>
</footer>
