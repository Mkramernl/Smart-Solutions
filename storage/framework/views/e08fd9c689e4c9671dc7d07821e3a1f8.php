<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'contact']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'contact']); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\smart-solutions\resources\views/contact.blade.php ENDPATH**/ ?>