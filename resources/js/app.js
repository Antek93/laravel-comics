import './bootstrap';

import '~resources/scss/app.scss';

import * as bootstrap from 'bootstrap';

import.meta.glob([
    '../img/**'
]);

// da riutilizzare nel caso serva su xxx.blade.php:

// <img src="{{ Vite::asset('resources/img/nomefileimmagine.estensioneImmagine') }}" alt="">
