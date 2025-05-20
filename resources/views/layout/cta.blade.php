<section class="bg-primary text-white py-5">
      <div class="container text-center">
        <h2 class="mb-4">{{ $cta_title ?? 'Ready to Grow Your Business?' }}</h2>
        <p class="lead mb-4">
          {{ $cta_description ?? "Let's discuss how we can help you achieve your marketing goals." }}
        </p>
        <a href="{{ $cta_route ?? '/contact' }}" class="btn btn-light btn-lg">{{ $cta_button_text ?? 'Contact Us Today' }}</a>
      </div>
</section>