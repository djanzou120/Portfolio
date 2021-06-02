<!--box contact-->
<section id="Contact" class="box-propos d-flex justify-content-center align-items-center flex-column all_section">

    <h1 class="contact_title">
        ME CONTACTER
    </h1>
    <img src="{{asset('assets/image/liner.png')}}" alt="ligne verte" class="contact_bar">
    <p class="text-center contact_text">
        Voudriez vous me soumettre un de vos projet, veuillez me contacter via le formulaire ci-dessous
    </p>
    <form class="contact_form" method="POST" action="{{route('contact.create')}}">
        <div class="mb-2">
            <input type="text" name="name" placeholder="NOM" class="form-control btn-form off-border contact_input" required>
        </div>
        <div class="mb-2">
            <input type="email" name="email" placeholder="ADRESSE EMAIL" class="form-control btn-form border-bottom-2 off-border contact_input" required>
        </div>
        <div class="mb-2">
            <input type="tel" name="phone" maxlength="20" placeholder="NUMERO DE TELEPHONE" class="form-control btn-form border-bottom-2 off-border contact_input">
        </div>
        <div class="">
            <textarea class="form-control btn-form off-border contact_area" placeholder="MESSAGE" name="message" required></textarea>
        </div>
        <div class="btn-container">
            <button type="submit" class="btn btn-contact" id="btn-contact">Envoyer votre message</button>
        </div>
        @csrf
    </form>

</section>


<div aria-live="polite" aria-atomic="true" class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
    <div class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            <h6 class="text-center contact_text" id="back_msg"></h6>
        </div>
    </div>
</div>
