@extends("layouts.app")

@section("content")
    <!-- Hero Section -->
    <section class="hero-section text-white text-center py-5">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-12">
            <h1 class="display-3 fw-bold mb-4">Welcome to MarketPro Agency</h1>
            <p class="lead mb-5">Your Partner in Digital Growth and Success</p>
            <a href="services.html" class="btn btn-primary btn-lg me-3"
              >Our Services</a
            >
            <a href="contact.html" class="btn btn-outline-light btn-lg"
              >Get Started</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
            @include("layouts.parts.services", [
                "icon" => "bi bi-search",
                "title" => "SEO Optimization",
                "content" => "Boost your search rankings and drive organic traffic with our
                  expert SEO strategies."
            ])

            @include("layouts.parts.services", [
                "icon" => "bi bi-share",
                "title" => "Social Media Marketing",
                "content" => "Engage your audience and build brand awareness across all
                  social platforms."
            ])

            @include("layouts.parts.services", [
                "icon" => "bi bi-graph-up",
                "title" => "PPC Advertising",
                "content" => "Maximize ROI with targeted pay-per-click campaigns that
                  convert."
            ])
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-primary text-white py-5">
      <div class="container text-center">
        <h2 class="mb-4">Ready to Grow Your Business?</h2>
        <p class="lead mb-4">
          Let's discuss how we can help you achieve your marketing goals.
        </p>
        <a href="contact.html" class="btn btn-light btn-lg">Contact Us Today</a>
      </div>
    </section>

@endsection