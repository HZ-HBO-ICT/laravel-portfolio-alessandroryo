@extends('layouts.main')

@section('main-content')
<main>
    <section class="faq">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-container">
            <div class="faq-accordion">
                <div class="faq-accordion-item" id="question1">
                    <a class="faq-accordion-link" href="#question1">
                        How can you print a document from your laptop at HZ?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="faq-answer">
                        <p>
                            1. Go to <a href="print.hz.nl">print.hz.nl</a>.<br>
                            2. Login with HZ account.<br>
                            3. Upload the document.<br>
                            4. Walk to the HZ printer location.<br>
                            5. Tap the student card.<br>
                            6. Tap the print button.<br>
                            7. Check the document that you want to print.<br>
                            8. Print the document.<br>
                            9. Tap the close button.<br>
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item" id="question2">
                    <a class="faq-accordion-link" href="#question2">
                        How can you scan a document a send it to your laptop at HZ?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="faq-answer">
                        <p>
                            1. Walk to the HZ printer location.<br>
                            2. Tap the student card.<br>
                            3. Tap the scan button.<br>
                            4. Put the paper inside the scanner.<br>
                            5. Tap the green button.<br>
                            6. Send the scanner result to your HZ email.<br>
                            7. Tap the close button.<br>
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item" id="question3">
                    <a class="faq-accordion-link" href="#question3">
                        What do you need to do when you are sick/show symptoms of coronavirus?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="faq-answer">
                        <p>We need to contact our teacher or helpdesk at school. We have to stay at home and join the online class to compensate for unusual sickness.</p>
                    </div>
                </div>
                <div class="faq-accordion-item" id="question4">
                    <a class="faq-accordion-link" href="#question4">
                        How can you book a project space in one of the wings?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="faq-answer">
                        <p>
                            1. Go to <a href="portal.hz.nl">portal.hz.nl</a>.<br>
                            2. Login with your HZ account.<br>
                            3. Go to change personal menu.<br>
                            4. Find AVReservation.<br>
                            5. Search for the available room.<br>
                            6. Follow the next instruction until finish.<br>
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item" id="question5">
                    <a class="faq-accordion-link" href="#question5">
                        What are the instructions if you want to park your car at the HZ parking lot?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="faq-answer">
                        <p>We must park our car at the car park of PEZM at Poelendaelesingel 10. But, there is a disabled parking space
                            available right next to the HZ building at Het Groene Woud 1-3. When you want to park your car, follow
                            the signs to the HZ parking places and using the HZ pass. After that we need to walk to HZ.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection