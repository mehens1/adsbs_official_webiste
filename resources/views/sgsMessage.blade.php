@extends('layouts.app')

@section('content')
<main class="main">

    @include('layouts.secNav')

    <section class="section section--sg-message">
        <div class="section__container">
            <div class="sg-message" style="background-image: url('{{ asset('images/placeholder.jpg') }}');">
                <div class="sg-message__image" style="background-image: url('');"></div>
                <div class="sg-message__content">
                    <p class="p1">Better data and statistics will help governments track progress and make sure
                        their decisions are evidence-based; they can also strengthen accountability. A true data
                        revolution would draw from an existing and new source of data to fully integrate statistics
                        into decision making, promote open access to, and use of data and ensure increase support
                        for statistical system</p>
                    <p>&nbsp;</p>
                    <p style="text-align: right;"><strong>SG, ADSBS</strong></p>
                </div>
            </div>
        </div>
    </section>

    <div class="entry-content">
        <h3 style="text-align: left;">
            <strong>
                IMPLEMENTING THE ADAMAWA STATE BLUE PRINT ON DATA AND STATISTIC SECTOR
                2016-2030 PLAN AS A BEDROCK FOR EVIDENCE BASED DECISION MAKING AND TRACKING OF THE STATE’S DEVELOPMENT
                PLANS
            </strong>.
        </h3>
        <h4><strong>Why Data Revolution</strong></h4>
        <p class="p1">It is well acclaim that: Better data and statistics will help governments track progress and make
            sure their decisions are evidence-based; they can also strengthen accountability. A true data revolution
            would draw from an existing and new source of data to fully integrate statistics into decision making,
            promote open access to, and use of data and ensure increase support for statistical system.</p>
        <p class="p1">Therefore, evidence-based data improves our decision-making process by indicating which outcomes
            are more realistic and how much is required to fund government projects so as to ensure that no one is left
            behind.</p>


        <p><strong>ADAMAWA STATE BUREAU STATISTICS (ADSBS)</strong></p>
        <p class="p1">ADSBS was established under law (No. 3) as an official source of data in Adamawa State. its
            mandate
            includes production of accurate, reliable and timely data both as standalone or in collaboration with MDAs
            and/or International agencies. Adamawa State collects data through 2 major ways::</p>
        <ol>
            <li class="p1">System of Administrative</li>
            <li class="p1">Statistics (SAS) and Censuses/Surveys.</li>
        </ol>
        <p class="p1">To further confirm the commitment of the State towards use of data for decision making, Adamawa
            State setup a committee to come up with Adamawa State Blue print on Data and Statistics Sector Plan
            2016-2030 with the Adamawa State Bureau of Statistics (ADSBS) given the mandate to drive the data revolution
            masterplan in the State. ADSBS is conscious of the place of data in giving the decision makers the power to
            explore and make predictions using data for the betterment of the citizenry. In this regard, the Adamawa
            State Bureau of Statistics is repositioned carried out more surveys and census to serve the state with
            better statistics.</p>

        <p class="p1">In order to effectively carry out this mandate, The Bureau is undergoing various stages of reform,
            especially in the area of carrying out surveys, data collection, collation and analysis in various sectors
            of the economy with e-platform (Electronic Device) and analyses its data using world renown software, EXCEL,
            SPSS, STATA, R Programming, Python and TABLEAU.</p>

        <p class="p1">The Blue Print was generally accepted by stakeholders as the most practical approach to operationalizing the data revolution plan and will have a net positive effect on the state statistical system.</p>
        
        <p class="p1">ADSBS has put much importance in collecting quality, accurate, reliable and timely data that will inform decision making. As part of the data revolution plan, ADSBS has integrated the Academic community especially University students during data collection activities.</p>
        <p class="p1">The students are trained on data collection methods, qualities of a good enumerator and as well as exposure to field experience. The aim is to give them practical, hands-on experience which may not be frequent and practical when compared to our field activities.</p>
        <p class="p1">Our Field team work assiduously, with great commitment in gathering accurate data which are processed and analysed to produce reliable information. Collecting quality data is part of our believing in developing monitoring tools (e.g in-built quality check in the digitalize forms).</p>
        <p class="p1">We have also developed mechanism for collecting data from high risk areas to ensure balanced and fair coverage. We reach out to remote areas by passing through thick forest, crossing many streams & rivers, climbing mountains, traveling along dreaded roads, all in pursuit of data for evidence based decision making.</p>
        
        <p class="p2"><strong>CONCLUSION</strong></p>
        <p class="p1">I will like to conclude, by saying, imbibe data culture for well acclaim method for collecting accurate, reliable and timely data for evidence-based decision making continues to be our mantra. Whatever we plan to achieve as individuals, organization or government must be based on facts, logic and common goal.</p>
    </div>
</main>

@endsection

@section('aside')
@include('layouts.aside')
@endsection