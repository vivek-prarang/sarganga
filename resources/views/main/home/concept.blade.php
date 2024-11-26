@php
    $metaData['main-title'] = 'The Concept';
    $metaData['slogan']='Knowledge Management';
    
@endphp
<x-layout.main.base :metaData="$metaData">

    <style>
/* Container for the row to center elements */
.concept-flex-center {
    display: flex;
    justify-content: center;  
    align-items: center;     
    height: 100%;            
}

/* Styling for the buttons */
.btn-info {
    width: 100%;           
    text-align: center;      
    padding: 10px;          
}


.concept-flex-center img {
    display: block;          
    margin-left: auto;       
    margin-right: auto;
    max-width: 100%;         
    max-height: 100%;        

    .col-sm-8 .concept-flex-center img{
 margin-right:3px;
 margin-left:0px;
}

/* Image */
.container .row .col-sm-8 .row .col-4 .concept-flex-center img{
 width:459px !important;
}
    </style>
    <section class="container mt-4">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-4">
                        <div class="concept-flex-center">
                            
                        </div>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-info p-2 mb-4" href="#">Knowledge</a> 
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="concept-flex-center">
                            <a class="btn btn-info p-2" href="#">Knowledge</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                          
                            <img class="w-75" src="{{asset('assets/img/concept-center.JPG')}}" alt="">
                           
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                            <a class="btn btn-info p-2" href="#">Knowledge</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="concept-flex-center">
                          
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                            
                            <a class="btn btn-info p-2 mt-4" href="#">Knowledge</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                           
                        </div>
                    </div>
                </div>               
            </div>
            <div class="col-sm-4">
                <p class="text-prinary knw-title ps-4">Knowledge</p>
                <ul>
                    <li><a type="button" data-bs-toggle="modal" data-bs-target="#saraswatiKnowledge"
                            class="text-primary" href="">Saraswati and Knowledge</a></li>
                    <li><a type="button" data-bs-toggle="modal" data-bs-target="#geographicKnowledge"
                            class="text-primary" href="">Geographic Knowledge</a></li>
                    <li><a type="button" data-bs-toggle="modal" data-bs-target="#knowledgeLanguage"
                            class="text-primary" href="">Knowledge & Language</a></li>
                    <li>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#languageIntelligence"
                            class="text-primary" href="">Language & Intelligence</a>
                    </li>
                    <li><a type="button" data-bs-toggle="modal" data-bs-target="#languageLearning" class="text-primary"
                            href="">Language & Learning</a></li>
                    <li>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#languageEmotionColors"
                            class="text-primary" href="">Language – Emotion & Colors</a>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <div class="modal fade" id="saraswatiKnowledge" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="saraswatiKnowledgeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="saraswatiKnowledgeLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Saraswati and Knowledge</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('assets/img/saraswati_knowledge.JPG') }}"
                            alt="Saraswati and Knowledge">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="geographicKnowledge" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="geographicKnowledgeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="geographicKnowledgeLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Geographic Knowledge</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('assets/img/c2a.JPG') }}"
                            alt="Geographic Knowledge">
                            <br>
                            <h4 class="fw-bold mt-4" >GEOGRAPHIC KNOWLEDGE : HYPERLOCAL </h4>
                            <p>Key to transition from a White-Dark Mind-Set to Full-Colour Thinking</p>
                            <br>
                            <p>Man’s relation to his cosmos is <span class="text-primary bg-warning">  Geo-specific </span>. This relation is defined by the Culture and Nature surrounding the human being. In other words, the <span class="text-primary bg-warning"> Culture & Nature </span> in which the human being nourishes act as binding factors between him and his Cosmos.

                            </p>
                            <img class="img-fluid" src="{{ asset('assets/img/c2b.JPG') }}"
                            alt="Geographic Knowledge">

                            <div class="row">
                                <div class="col-sm-6"><img class="img-fluid" src="{{asset('assets/img/c3c.jpg')}}" alt=""></div>
                                <div class="col-sm-6"><img class="img-fluid" src="{{asset('assets/img/c3n.jpg')}}" alt=""></div>
                            </div>
                            <p class="fw-bold text-primary">Core 2*3*10 Model   -  Foundation of  our Research, Curation & Storage/Aggregation 
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="knowledgeLanguage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="knowledgeLanguageLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="knowledgeLanguageLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Knowledge : The Process & Language Connection</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                     <div class="row">
                        <div class="col-sm-6">
                            <img class="img-fluid w-75" src="{{asset('assets/img/c4a.jpg')}}" alt="">
                        </div> 
                        <div class="col-sm-6">
                            <img class="img-fluid w-75" src="{{asset('assets/img/c4c.PNG')}}" alt="">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           
                            <img class="img-fluid w-75" src="{{asset('assets/img/c4b.jpg')}}" alt=""></div>
                        <div class="col-sm-6">
                           
                            <img class="img-fluid w-75" src="{{asset('assets/img/c4d.jpg')}}" alt=""></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="languageIntelligence" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="languageIntelligenceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="languageIntelligenceLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Intelligence – The Language Connection : Artificial & Natural</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-6"><img class="img-fluid" src="{{asset('assets/img/c5a.png')}}" alt=""></div>
                            <div class="col-sm-6"><img class="img-fluid" src="{{asset('assets/img/c5b.png')}}" alt=""></div>
                        <bdiv>
                        <div class="row">
                            <div class="col-sm-6"><img class="img-fluid" src="{{asset('assets/img/c5c.jpg')}}" alt=""></div>
                            <div class="col-sm-6"><img class="img-fluid" src="{{asset('assets/img/c5d.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="languageLearning" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="languageLearningLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="languageLearningLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Learning – The Language Connection : Machine & Mind</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('assets/img/language_learning.JPG') }}"
                            alt="Language & Learning">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="languageEmotionColors" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="languageEmotionColorsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="languageEmotionColorsLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Language – Emotion & Colors</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('assets/img/language_emotion_colors.JPG') }}"
                            alt="Language – Emotion & Colors">
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout.main.base>
