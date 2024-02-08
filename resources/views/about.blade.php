@extends('layouts.app')

@section('content')
<main class="main">

    @include('layouts.secNav')
    
    <section class="section section--carousel section--carousel-page">
        <div class="section__container">
            <div class="carousel">
                <div class="carousel__slide" style="background-image: url(' {{ asset('images/ad-logo-about-us-slider.jpg') }} ');">
                    <div class="slide__container">
                        <p>Unveiling the new ADSBS Logo!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-header">
        <h1>{{ $page_title }}</h1>
    </div>
    <div class="entry-content">
        <p><em>Adamawa State Bureau of Statistics (ADSBS) is the custodian of all activities that relate to official statistics in Adamawa State ranging from <strong>data collection, collation, analysis, interpretation, research,</strong> and <strong>coordination of statistical activities,</strong> which will aid policy formulation, development planning and evaluation of accomplishment.</em></p>
        <h2><strong>Who we are</strong></h2>
        <p>Adamawa State Bureau of Statistics is the statistical agency responsible for managing all sets of data and statistical activities in the State. It is the apex body and the custodian of all State official statistics and has the overall responsibility for overseeing the State Statistical System and coordinating the implementation of the State Statistical Master Plan.</p>
        
        <h2><strong>Our Vision Statement</strong></h2>
        <ul>
            <li>The State Bureau of Statistics that is able to maintain an effective and well-coordinated statistical system to meet the information requirements of government and the society towards achieving a sustainable development.</li>
        </ul>

        <h2><strong>Our Mission Statement</strong></h2>
        <ul>
            <li>Bringing effectiveness and efficiency to planning and decision making by developing and operating a virile statistical system.</li>
        </ul>


        <h2><strong>Our strategic function </strong></h2>
        <p>The strategic function of Adamawa State Bureau of Statistics (KDBS) is to eliminate waste, duplication,
            compromise of quality, and improve statistical standards.</p>
        <p><span id="more-14"></span></p>
        <p>Backed by the <strong>Adamawa State Statistics Law</strong>, The Bureau of was established as a Cooperate Body
            with Perpetual Succession, a common seal and a power to sue and be sued in its cooperate name by the Adamawa
            Sate House of Assembly Law No 3 of 2014. The Bureau is charged with the following responsibilities:</p>
        <ol>
            <li>The Bureau shall be responsible for the development and management of official Statistics</li>
            <li>The Bureau shall be the authoritative source and custodian of official statistics in the State</li>
            <li>The Bureau shall also be responsible for the following:</li>
            <li>Coordination of the state statistical system</li>
            <li>Advising the State and Local Government on all matters relating to statistics.</li>
            <li>Developing and promoting the use of statistical standards and appropriate methodologies in the state
                statistical system</li>
            <li>Collecting, compiling, interpreting, analyzing, publishing statistical information alone or in
                collaborating with other agencies (both governmental and non- governmental)</li>
            <li>Developing and maintaining a comprehensive socio-economic State Data Bank and</li>
            <li>Fulfilling all other functions relating to statistics which the government may direct from time to time.
            </li>
        </ol>


        <h2><strong>Powers of the Bureau </strong></h2>
        <p>The enabling Law has empowered the Bureau to carry out all activities which are indispensable, profitable, or suitable for the intention of carrying out its functions and focus to the provision of the Law.</p>
        <p>The Law also gave the Statistician General the definitive responsibility to carry out policies and pronouncement of the Bureau in accordance with the provision of the Law. Any Ministry, Department or Agency (MDA) at all levels of government, Private, Nigerian or Foreign, individuals wishing to conduct a statistical survey in Adamawa State must first obtain an approval of the Bureau and where necessary, the Bureau participates in the conduct of the Survey.</p>
        
        <h2><strong>MANDATE STATEMENT </strong></h2>
        <p>The Bureau of Statistics is the Central Statistical Agency to:</p>
        
        <ol>
            <li>Coordinate the State Statistical System to guarantee efficiency, avoid gaps and duplication of efforts.</li>
            <li>Collect, compile, analyse, interpret, publish and disseminate statistical information alone or in collaboration with other agencies.</li>
            <li>Conduct research about various sectors to facilitate the social and economic development of the State.</li>
            <li>Develop and promote the use of statistical standards and appropriate methodologies in the State Statistical System.</li>
            <li>Advise State and Local Government on strategies relating to research and statistical development.</li>
            <li>Develop and maintain a comprehensive socio-economic State Data Bank.</li>
            <li>Provide a focal point of contact with National and International Agencies on statistical matters.</li>
            <li>Carry out other functions relating to statistics as the State Government may assign to the Bureau from time to time.</li>
        </ol>
        
        <h2><strong>SERVICE CHARTER </strong></h2>
        <p>The services provided are as follows:</p>
        
        <ol>
            <li>Generate and publish data and indicators on Education, Agriculture, Health, Population, Transport, Public Finance, Prices of items, Manpower, Security, Justice and Social welfare, for planning, monitoring, evaluation and decision making.</li>
            <li>Provide key indicators and parameters for budget preparation and Medium-Term Expenditure Framework.</li>
            <li>Make appropriate population projections for government, society, institutions and individuals.</li>
            <li>Generate household-based information for measuring situation analysis, project/programme assessment and evaluation.</li>
            <li>Organisation of quarterly meeting of State Consultative Committee on Statistics for greater coordination, collaboration, networking, information sharing and feedback strategies.</li>
            <li>Organisation of producer-user workshops.</li>
            <li>Organisation of Data Validation Workshops with relevant stakeholders.</li>
            <li>Printing and dissemination of Statistical documents.</li>
            <li>Production of quarterly Statistical Newsletter for information dissemination.</li>
            <li>Incorporation of a statement of welcoming constructive criticisms in all publications.</li>
            <li>The existence of Email address of the State Bureau of Statistics/Statistician General for contact and feedback.</li>
        </ol>

        <h2><strong>Departments </strong></h2>
        <ol>
            <li>Census and Survey</li>
            <li>Social and Economic Statistics</li>
            <li>Research &amp; Methodology</li>
            <li>Finance and Administration</li>
            <li>Special Units (Audit Unit, Legal Unit, Servicom /Anti-Corruption Unit and Public Relations Unit)</li>
        </ol>
    </div>
</main>

@endsection

@section('aside')
@include('layouts.aside')
@endsection