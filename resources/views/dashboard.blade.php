<x-app-layout>
    <div class="flex flex-col ">
        <div class="bg-amber-200 rounded-lg shadow-lg px-4 py-6 md:w-2/5 mx-4">
            <h3 class="text-xl font-bold mb-4">{{ __('Votre profil') }}</h3>
            <p class="text-gray-600">{{ __('Nom ') }} </p>
            <p class="text-gray-600">{{ __('Prénom : ') }} </p>
            <p class="text-gray-600">{{ __('Email : ') }} </p>
        </div>
    </div>
    
    <div class="flex flex-col ">
        <div class="bg-amber-200 rounded-lg shadow-lg px-4 py-6 md:w-2/5 mx-4">
            <h3 class="text-xl font-bold mb-4">{{ __('Votre cotisation adhérents') }}</h3>
            <p class="text-gray-600">{{ __('Statut cotisation : ') }} </p>
            <p class="text-gray-600">{{ __('Date de fin de cotisation : ') }}</p>
        </div>
    </div>

    <div class="flex flex-col ">
        <div class="bg-amber-200 rounded-lg shadow-lg px-4 py-6 md:w-2/5 mx-4">
            <h3 class="text-xl font-bold mb-4">{{ __('Gestion évènements') }}</h3>
            <p class="text-gray-600">{{ __('Disponibilité : ') }} </p>
            <p class="text-gray-600">{{ __('Accès calendrier évènements : ') }}</p>
        </div>
    </div>

    
</x-app-layout>
