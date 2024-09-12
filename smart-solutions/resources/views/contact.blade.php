<x-layouts.app title="Contact">
    <div class="topPageContainer">
        {{-- contains information about what the page's purpose is --}}
        <h1>Welkom op onze pagina!</h1>
        <p>
            Inhoud: Heb je vragen of wil je met ons in contact komen?
            Vul het onderstaande formulier in of stuur ons een e-mail op 
            info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!
        </p>
        <form action="/contact" method="POST" class="formContainer">
            <div class="formSection">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="formSection">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="formSection">
                <label for="subject" class="subject">Onderwerp:</label>
                <select id="subject" name="subject">
                    <option value="algemeen">Algemeen</option>
                    <option value="vraag">Vraag</option>
                    <option value="feedback">Feedback</option>
                </select>
            </div>
            <div class="formSection">
                <label for="message">Bericht:</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <button type="submit">Verzenden</button>
        </form>
    </div>
</x-layouts.app>