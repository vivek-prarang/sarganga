@php
    $metaData['main-title'] = 'The Concept';
    $metaData['slogan'] = 'Knowledge Management';
    $metaData['bg-image'] = asset('assets/img/lotus/i7.jpg');

@endphp
<x-layout.main.base :metaData="$metaData">
    <style>
        .concept-flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
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
        }
        .col-sm-8 .concept-flex-center img {
            margin-right: 3px;
            margin-left: 0px;
        }
        .container .row .col-sm-8 .row .col-4 .concept-flex-center img {
            width: 459px !important;
        }
        .sars-p p {
            font-size: 14px;
        }
        .sars-p h2 {
            font-size: 18px;
        }
        #saraswatiKnowledge .sars-p h2 {
            font-size: 17px;
            font-weight: 600;
        }
        #saraswatiKnowledge .sars-p p {
            font-size: 14px !important;
            text-align: justify;
        }
        #saraswatiKnowledge .modal-dialog .modal-body {
            overflow: scroll;
            max-height: 80vh;
        }
        #saraswatiKnowledge .modal-body .col-sm-5 {
            position: sticky;
            top: 1px;
        }
    </style>

    <style>
        .col-sm-8 .btn-info {
            color: #ffffff;
            font-weight: 600;
            font-size: 18px;
            line-height: 1.6em;
            font-style: normal;
            text-transform: capitalize;
            letter-spacing: 0.6px;
            word-spacing: 2.9px;
        }
        .container ul li {
            font-weight: 400;
        }

        .container ul li a:hover {
            font-weight: 600;
        }

        .modal-title {
            text-align: center !important;
        }
    </style>
    <section class="container mt-4">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-4">
                        <div class="concept-flex-center"></div>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-info p-2 mb-4" href="#" data-bs-toggle="modal"
                            data-bs-target="#modalKnowledgeAcquisition">Knowledge Acquisition</a>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="concept-flex-center">
                            <a class="btn btn-info p-2" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalKnowledgeUse">Knowledge Use</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                            <img class="w-75 image-container" src="{{ asset('assets/img/concept-center.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                            <a class="btn btn-info p-2" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalKnowledgeStorage">Knowledge Storage</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="concept-flex-center"></div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center">
                            <a class="btn btn-info p-2 mt-4" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalKnowledgeDistribution">Knowledge Distribution</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="concept-flex-center"></div>
                    </div>
                </div>
            </div>

            <!-- Modals -->
            <div class="modal fade" id="modalKnowledgeAcquisition" tabindex="-1"
                aria-labelledby="modalKnowledgeAcquisitionLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalKnowledgeAcquisitionLabel">Knowledge Acquisition</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>Buying Books – Source books – Antiquarian, New; Imports</li>
                                <li> Buying Prints & Objects</li>
                                <li>Searching – Auctions/ Shops/ e-Shops/FB
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalKnowledgeUse" tabindex="-1" aria-labelledby="modalKnowledgeUseLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalKnowledgeUseLabel">Knowledge Use</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>Online Media – For Search</li>
                                <li>Hyperlocal – Context by Location (& Language)</li>
                                <li>Education – Formal/ Informal</li>
                                <li>For Event/ Continuous Learning</li>
                                <li>For Work/ Hobbies</li>
                                <li>General / Specific Subject</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalKnowledgeStorage" tabindex="-1"
                aria-labelledby="modalKnowledgeStorageLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalKnowledgeStorageLabel">Knowledge Storage</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li> Library & Archive</li>
                                <li>Books, Prints, Films</li>
                                <li>Old Media – CD & DVD</li>
                                <li>Digital – Online/Offline</li>
                                <li>Retrieval System</li>
                                <li>Conservation</li>
                                <li>Restoration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalKnowledgeDistribution" tabindex="-1"
                aria-labelledby="modalKnowledgeDistributionLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalKnowledgeDistributionLabel">Knowledge Distribution</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>Museums & Exhibitions</li>
                                <li>Curation – Online / Offline</li>
                                <li>Books – Research & Publication</li>
                                <li>Distribution – Free / Paid</li>
                                <li>Online Curation – Global / Hyperlocal</li>

                            </ul>
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
                    <li><a type="button" data-bs-toggle="modal" data-bs-target="#languageLearning"
                            class="text-primary" href="">Language & Learning</a></li>
                    <li>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#languageEmotionColors"
                            class="text-primary" href="">Language – Emotion & Colors</a>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <div class="modal fade" id="knowledgeLanguage" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="knowledgeLanguageLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="knowledgeLanguageLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Knowledge : The Process &
                            Language Connection</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid w-75" src="{{ asset('assets/img/c4a.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid w-75" src="{{ asset('assets/img/c4c.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">

                                <img class="img-fluid w-75" src="{{ asset('assets/img/c4b.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-6">

                                <img class="img-fluid w-75" src="{{ asset('assets/img/c4d.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="sharedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="sharedModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="sharedModalLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Knowledge – Management</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('assets/img/c2c.jpg') }}" alt="Saraswati and Knowledge">
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
                        <p class="modal-title main-slug-line text-primary text-center">
                            Intelligence – The Language Connection: Artificial & Natural
                        </p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="row">
                            <!-- First Row of Images -->
                            <div class="col-sm-6">
                                <img class="img-fluid" src="{{ asset('assets/img/c5a.png') }}" alt="Image c5a">
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid" src="{{ asset('assets/img/c5b.png') }}" alt="Image c5b">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <!-- Second Row of Images -->
                            <div class="col-sm-6">
                                <img class="img-fluid" src="{{ asset('assets/img/c5c.jpg') }}" alt="Image c5c">
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid" src="{{ asset('assets/img/c5d.jpg') }}" alt="Image c5d">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="saraswatiKnowledge" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="saraswatiKnowledgeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="saraswatiKnowledgeLabel">
                        <p class="modal-title main-slug-line text-primary text-center">Saraswati and Knowledge</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="sars-p">
                                    <p>Just as the <span class="fw-bold"> River </span> flows, so does <span
                                            class="fw-bold"> Knowledge </span> & so does <span
                                            class="fw-bold">Life</span> itself. These are all borderless flows of
                                        continuity even though each of us perceives these as finite, during our waking
                                        hours.</p>
                                    <p>Just as the <span class="fw-bold">“Ganga”</span> is not just one finite river
                                        but refers generically to all rivers in Indian culture, <span class="fw-bold">“
                                            Saraswati”</span> is not just one Goddess but a reference to Knowledge
                                        itself.</p>
                                    <p>Breaking free from the nebulous connections of the English word culture, <span
                                            class="fw-bold">Sanskriti </span> to the beginning of civilization defined
                                        through the language in which we think. Just as the river flows and takes
                                        everything within its course, Sanskriti keeps flowing too. Let us now revisit
                                        Sanskriti in local allegory, in different parts of the World:</p>

                                    <h6 class="fw-bold">Asia/Australia Sanskriti</h6>
                                    <p>It is the Sanskrit root “Sr” meaning “to flow”, “to stream”, from which emerges
                                        Sarita, the river. The Sara or water of the Sarita Saraswati, flows through
                                        Asia. And it was Sara, water, with which it all began in Australian mythology,
                                        when the two Bagadjimbiri brothers woke from ground in the middle of the desert.
                                        They dug in the earth until they reached life-giving water. They founded rivers,
                                        mountains, flowers and trees. When these brothers died, they were reborn as
                                        water snakes, flowing through the rivers until their spirits flew to the sky
                                        forming the clouds. These clouds continue to bring rain, and the water continues
                                        to flow through streams of knowledge into Asia/Australia Sanskriti.</p>

                                    <h6 class="fw-bold">Africa Sanskriti</h6>
                                    <p>To the Yoruba, Orunmila is the Orisha (spirit manifested in physical form) of
                                        knowledge, acumen and foresight. His wife Osun the deity of river, is the spirit
                                        of fresh water, fertility and beauty. While her water nurtures the land and
                                        people, Orunmila the linguist, travels across cities and villages, healing
                                        people’s lives through divination. Like Orunmila, the streams of Africa
                                        Sanskriti flow across places and languages, drawing insight from the river of
                                        knowledge.</p>

                                    <h6 class="fw-bold">Europe Sanskriti</h6>
                                    <p>Athena (Athene), the Goddess of war and protector of city, values reason and
                                        instinct above conflict and violence. A patron of crafts, literature and
                                        agriculture, Athena invented the flute, and is represented by the owl- a symbol
                                        of her wisdom and knowledge. Referring to the lake or the stream near which she
                                        is said to have been born, Athena is also known as Trito or Tritogenes. As
                                        Nedu’sia she has a sanctuary on the river Nedon, and as Aethyia (Aithuia), she
                                        is skilled in ship-building and navigation. Navigate through Europe Sanskriti to
                                        pursue the many streams of knowledge flowing through its cities. On these banks
                                        is also worshipped Sophia, the Goddess of wisdom, knowledgeable and caring. She
                                        is the deity of fate, the female God, the wife of Solomon; she reigns across
                                        time and space.</p>

                                    <h6 class="fw-bold">China Sanskriti</h6>
                                    <p>At the source of the river Qingshui, is Mount Wutai, one of the four sacred
                                        mountains in Shanxi, China. It is the abode of Manjushri the youthful
                                        Bodhisattva- an incarnation of great wisdom, resplendent with gentle glory. With
                                        a flaming sword of insight Manjushri cuts through ignorance and suffering. At
                                        his heart, with his left hand, he holds the lotus on which rests the Great
                                        Wisdom Sutra- the essence of Buddha’s wisdom. Just as Manjushri’s Lotus stalk
                                        leads to transcendental wisdom, the streams of China Sanskriti lead to the
                                        greater river of knowledge.</p>

                                    <h6 class="fw-bold">Middle East Sanskriti</h6>
                                    <p>Seshat the ancient Egyptian Goddess of wisdom and knowledge is the female scribe
                                        and record keeper who invented writing. Wearing a headdress with the
                                        seven-pointed star (or flower), Seshat is the equivalent of Thot, the moon God
                                        of writing and knowledge of whose Library she is the Mistress. She is also
                                        associated with Isis, the Goddess providing fertility through water and credited
                                        with the invention of hieroglyphic writing. Seshat is however the only Goddess
                                        depicted in the act of writing. She is the deity of architecture, astronomy,
                                        astrology, building, mathematics, history and surveying. And these varied
                                        streams of knowledge from across space and time are merging into the river of
                                        Middle East Sanskriti.</p>

                                    <h6 class="fw-bold">America Sanskriti</h6>
                                    <p>Quetzelcoatl is the Mesoamerican God of learning, knowledge and writing. Along
                                        with his twin Xolotl, he is the creator of mankind, of wind and rain.
                                        Represented as the feathered serpent deity, Quetzelcoatl transcends from this
                                        world and moves across the elements of earth, air and water. Besides inventing
                                        the calendar and books, as the deity of mankind he signifies the vital energy
                                        within us. The vitality of America Sanskriti is in its streams of knowledge that
                                        transcend and move beyond borders.</p>
                                </div>

                            </div>
                            <div class="col-sm-5">
                                <img class="img-fluid" src="{{ asset('assets/img/saras.jpg') }}" alt="">
                                <h5>Saraswati by the Ganga – Visual Iconography
                                </h5>
                                <p>Saraswati plays the Veena sitting on a Swan & Ganga sits on a Crocodile
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="geographicKnowledge" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="geographicKnowledgeLabel" aria-hidden="true">
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
                        <img class="img-fluid" src="{{ asset('assets/img/c2a.jpg') }}" alt="Geographic Knowledge">
                        <br>
                        <h4 class="fw-bold mt-4">GEOGRAPHIC KNOWLEDGE : HYPERLOCAL </h4>
                        <p>Key to transition from a White-Dark Mind-Set to Full-Colour Thinking</p>
                        <br>
                        <p>Man’s relation to his cosmos is <span class="text-primary bg-warning"> Geo-specific </span>.
                            This relation is defined by the Culture and Nature surrounding the human being. In other
                            words, the <span class="text-primary bg-warning"> Culture & Nature </span> in which the
                            human being nourishes act as binding factors between him and his Cosmos.

                        </p>
                        <img class="img-fluid" src="{{ asset('assets/img/c2b.jpg') }}" alt="Geographic Knowledge">

                        <div class="row">
                            <div class="col-sm-6"><img class="img-fluid" src="{{ asset('assets/img/c3c.jpg') }}"
                                    alt=""></div>
                            <div class="col-sm-6"><img class="img-fluid" src="{{ asset('assets/img/c3n.jpg') }}"
                                    alt=""></div>
                        </div>
                        <p class="fw-bold text-primary">Core 2*3*10 Model - Foundation of our Research, Curation &
                            Storage/Aggregation
                        </p>
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
                        <p class="modal-title main-slug-line text-primary text-center">Learning – The Language
                            Connection : Machine & Mind</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('assets/img/c6a.jpg') }}" alt="Language & Learning">
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
                        <img class="img-fluid" src="{{ asset('assets/img/c7a.jpg') }}"
                            alt="Language – Emotion & Colors">
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout.main.base>
