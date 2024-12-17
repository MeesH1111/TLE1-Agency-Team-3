<x-base-layout>
    <x-slot:title>
        Over ons
    </x-slot:title>

    <x-slot name="css">
        @vite('resources/css/aboutUs.css')
    </x-slot>

    <div class="about-page">
        <!-- Header met achtergrondafbeelding en titel -->
        <section class="about-header">
            <div class="header-content">
                <h1>OPEN HIRING</h1>
            </div>
        </section>

        <!-- Over ons tekst -->
        <section class="about-content">
            <h2>Over ons</h2>
            <p>
                Bij Open Hiring geloven we in kansen voor iedereen. Ons bedrijf is opgericht met de missie om een
                rechtvaardige en inclusieve werkomgeving te creëren waarin talent, inzet en motivatie centraal staan. Wij zetten
                traditionele sollicitatieprocedures opzij en bieden een eenvoudige en eerlijke manier om aan werk te komen:
                zonder cv's, zonder interviews, en zonder voorwaarden.
            </p>
            <p>
                Onze kernwaarden zijn <strong>gelijkheid</strong>, <strong>vertrouwen</strong> en <strong>diversiteit</strong>. We willen barrières doorbreken en banen toegankelijk maken voor iedereen, ongeacht achtergrond, ervaring of opleiding. Met Open Hiring geven we mensen de kans om zich te bewijzen en een positieve bijdrage te leveren aan de maatschappij.
            </p>
            <p>
                Samen bouwen we aan een toekomst waarin iedereen telt. Welkom bij Open Hiring, waar jouw inzet de enige vereiste is.
            </p>
        </section>

        <!-- Contact knop -->
        <section class="contact-button">
            <a href="{{ route('categories.index') }}" class="btn" aria-label="knop om naar de categorieën van vacatures te gaan">Zoek vacatures</a>
        </section>
    </div>
</x-base-layout>
