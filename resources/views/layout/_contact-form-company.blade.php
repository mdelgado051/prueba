<form class="contactLeadForm" action="{{ route('contact.lead') }}" method="POST">
    @csrf
    <input type="hidden" name="subject" value="Aliados Estratégicos">
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
        <input class="form-control py-2" id="phone" name="phone" type="tel" placeholder="Teléfono (10 dígitos):" minlength="10" required>
    </div>
    <div class="form-group">
        <select class="form-control py-2" id="state" name="state" required>
            <option value="">Selecciona tu Estado </option>
            <option value="MX-AGU">Aguascalientes </option>
            <option value="MX-BCN">Baja California </option>
            <option value="MX-BCS">Baja California Sur </option>
            <option value="MX-CAM">Campeche </option>
            <option value="MX-CHP">Chiapas </option>
            <option value="MX-CHH">Chihuahua </option>
            <option value="MX-COA">Coahuila </option>
            <option value="MX-COL">Colima </option>
            <option value="MX-CMX">Ciudad de México </option>
            <option value="MX-DUR">Durango </option>
            <option value="MX-GUA">Guanajuato </option>
            <option value="MX-GRO">Guerrero </option>
            <option value="MX-HID">Hidalgo </option>
            <option value="MX-JAL">Jalisco </option>
            <option value="MX-MEX">México </option>
            <option value="MX-MIC">Michoacán </option>
            <option value="MX-MOR">Morelos </option>
            <option value="MX-NAY">Nayarit </option>
            <option value="MX-NLE">Nuevo León </option>
            <option value="MX-OAX">Oaxaca </option>
            <option value="MX-PUE">Puebla </option>
            <option value="MX-QUE">Querétaro </option>
            <option value="MX-ROO">Quintana Roo </option>
            <option value="MX-SLP">San Luis Potosí </option>
            <option value="MX-SIN">Sinaloa </option>
            <option value="MX-SON">Sonora </option>
            <option value="MX-TAB">Tabasco </option>
            <option value="MX-TAM">Tamaulipas </option>
            <option value="MX-TLA">Tlaxcala </option>
            <option value="MX-VER">Veracruz </option>
            <option value="MX-YUC">Yucatán </option>
            <option value="MX-ZAC">Zacatecas </option>
        </select>
    </div>
    <div class="form-group">
        <input class="form-control py-2" id="city" name="city" type="text" placeholder="Ciudad:" required>
    </div>
    <div class="form-group">
        <input class="form-control py-2" id="company" name="company" type="text" placeholder="Empresa:" required>
    </div>
    <button type="submit" class="btn btn-pill btn-primary py-1 mt-3">Enviar</button>
</form>