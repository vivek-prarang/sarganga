@php
    $metaData['main-title'] = 'The Site';
    $metaData['slogan']='Our Location – On Map & Mind';
@endphp
<x-layout.main.base :metaData="$metaData">
  <section class="container mt-4">
    <h6>Location: Brijghat, Gadhmukteshwar, Hapur District, Uttar Pradesh, India</h6>
    {{-- <p>Pls give GIS numbers too</p> --}}
    <br><br>
    <!-- Embedding the Google Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4231.460530979324!2d78.13920013295701!3d28.74557012523369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390b710018f46003%3A0xb749fb6f65511346!2sSaraswati%20by%20Ganga!5e1!3m2!1sen!2sin!4v1732616261475!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
   
  </section>

</x-layout.main.base>
