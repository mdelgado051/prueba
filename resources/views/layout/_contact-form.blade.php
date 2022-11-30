<form action="{{ route('contact.lead') }}" class="py-4 px-md-4 px-3 contactLeadForm" method="POST">
    @csrf
    <div class="form-group">
        <input class="form-control py-2" id="name" name="first-name" type="text" placeholder="Nombre:" required>
    </div>
    <div class="form-group">
        <input class="form-control py-2" id="name" name="last-name" type="text" placeholder="Apellido:" required>
    </div>
    <div class="form-group">
        <input class="form-control py-2" id="email" name="email" type="email" placeholder="Email:" required>
    </div>
    <div class="form-group">
        <input class="form-control py-2" id="company" name="company" type="text" placeholder="Empresa:" required>
    </div>
    <div class="form-group">
        <input class="form-control py-2" id="subject" name="subject" type="text" placeholder="Asunto:" required>
    </div>
    <div class="form-group"><textarea class="form-control py-2" id="msg" name="comment" cols="30" rows="4"
                                      placeholder="Mensaje:" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary-outline btn-pill">Enviar</button>
</form>