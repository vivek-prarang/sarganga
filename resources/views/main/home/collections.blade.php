@php
    $metaData['main-title'] = 'The Collections';
    $metaData['slogan']='Knowledge Aggregation & Knowledge Acquisition';
@endphp
<x-layout.main.base :metaData="$metaData">
    <section class="container mt-4">
        <div class="p-1">
            <ul>
                <li>Cartography – Maps of India: 1460 CE to 1950</li>
                <li>Picture Postcards – India: 1896 to 1960 (400+ Towns/Subjects)</li>
                <li>God Pictures – Lithography, Oleography & Early Prints</li>
                <li>Travel & Film Posters – India & World</li>
                <li>Trade Labels & Match Box Labels – Textile, Hats, Fireworks etc.</li>
                <li>Visual History in Print – Engravings, Etchings, Wood Cuts, Lithography & Early Photography of India
                    & World Cities</li>
                <li>Comics – Early India & World</li>
                <li>Antiquarian Books – Early Printing in India (Indian Scripts, Sanskrit texts etc.) & Early Books
                    about India (Travelogues, Guides, History, Geography etc.)</li>
                <li>Other Books – Library of 25,000+ Including Books about Books/Library/Museums/Print History</li>
                <li>Music – India & World Recordings on Tape & Discs</li>
                <li>Film – India & World Recordings on Discs</li>
                <li>Other Objects – Supporting objects (historical markers) for Print/Book subject curation – Coins,
                    Busts, Terracotta/Ceramic/Glass, Globes, Carpets/ Textiles, Paintings/Art, Old
                    Technologies/Brands/Tools etc.z
                </li>
                <li>Over 200,000 Objects Including 25,000+ Books – Mostly Prints, Music CDs & Film DVDs</li>
            </ul>
        </div>
        <a type="button" data-bs-toggle="modal" data-bs-target="#whydowecollect" class="text-primary text-blue-500s"
            href="">Purpose – Why do we collect ?</a>
    </section>
    <div class="modal fade" id="whydowecollect" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="whydowecollectLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="whydowecollectLabel">
                        <p class="modal-title main-slug-line text-primary text-center"> Knowledge Management – 2 Projects – India & the World</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid" src="{{asset('assets/img/whydowecollect.JPG')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout.main.base>
