@php
    $metaData['main-title'] = 'Blogs';
    $metaData['slogan']='Digital Knowledge Distribution';
    $metaData['bg-image']=asset('assets/img/lotus/i4.jpg');
@endphp
<x-layout.main.base :metaData="$metaData">
  <section class="container mt-4">
    <ul>
        <li>New Blogs coming soon …</li>
        <li>
            For Visual History of India, please subscribe (using FB) for free on –
            <a href="http://www.indiavisual.com" target="_blank">http://www.indiavisual.com</a>
        </li>
        <li>
            For Digital Knowledge Webs, please see –
            <a href="http://www.Prarang.in" target="_blank">http://www.Prarang.in</a>
        </li>
    </ul>
     </section>

</x-layout.main.base>
