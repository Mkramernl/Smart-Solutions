<x-layouts.app title="contact">
    <div class="container">
        <h1>Contact</h1>
        <img src="img/Smart-solutions.jpg" alt="Smart Solutions" style="max-width:100%; height:auto;">
        <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in <br>
        of stuur ons een e-mail op info@smart-solutions.nl. <br>
        We proberen zo snel mogelijk te reageren!</p>


        <h2>Contactformulier</h2>
            <form action="/verwerk_formulier" method="post">
                <label for="naam">Naam:</label><br>
                <input type="text" id="naam" name="naam" required><br><br>

                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="onderwerp">Onderwerp:</label><br>
                <input type="text" id="onderwerp" name="onderwerp" required><br><br>

                <label for="bericht">Bericht:</label><br>
                <textarea id="bericht" name="bericht" rows="4" cols="50" required></textarea><br><br>

                <input type="submit" value="Verzenden">
            </form>
    </div>
</body>

</html>
</x-layouts.app>
