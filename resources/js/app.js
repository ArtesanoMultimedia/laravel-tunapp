import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';

import 'vuetify/styles';
import {createVuetify} from "vuetify";
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import {aliases, mdi} from 'vuetify/iconsets/mdi-svg'
import {
    mdiCog,
    mdiMap,
    mdiMapMarker,
    mdiLibrary,
    mdiHumanMaleFemaleChild,
    mdiBus,
    mdiCarBack,
    mdiAccount,
    mdiAccountHeart,
    mdiAccountGroup,
    mdiAccountMultiple,
    mdiHome,
    mdiBookOpenPageVariant,
    mdiHistory,
    mdiHomeCity,
    mdiHospitalBuilding,
    mdiDiamondStone,
    mdiCashMultiple,
    mdiHandCoin,
    mdiPalette,
    mdiFootball,
    mdiSilverwareForkKnife,
    mdiPineTree,
    mdiMusicNoteEighth,
    mdiCart,
    mdiChevronRight,
    mdiChevronLeft,
    mdiBeach,
    mdiHiking,
    mdiBrain,
    mdiMapMarkerPath,
    mdiEarth,
    mdiHeart,
} from '@mdi/js'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createPinia } from 'pinia';
import VueGoogleMaps from '@fawmi/vue-google-maps'

const vuetify = createVuetify({
    components,
    directives,
    icons: {
        defaultSet: 'mdi',
        aliases: {
            ...aliases,
            mapMarker: mdiMapMarker,
            cog: mdiCog,
            map: mdiMap,
            library: mdiLibrary,
            humanMaleFemaleChild: mdiHumanMaleFemaleChild,
            bus: mdiBus,
            carBack: mdiCarBack,
            account: mdiAccount,
            accountHeart: mdiAccountHeart,
            accountGroup: mdiAccountGroup,
            accountMultiple: mdiAccountMultiple,
            home: mdiHome,
            bookOpenPageVariant: mdiBookOpenPageVariant,
            history: mdiHistory,
            homeCity: mdiHomeCity,
            hospitalBuilding: mdiHospitalBuilding,
            diamondStone: mdiDiamondStone,
            cashMultiple: mdiCashMultiple,
            handCoin: mdiHandCoin,
            palette: mdiPalette,
            football: mdiFootball,
            silverwareForkKnife: mdiSilverwareForkKnife,
            pineTree: mdiPineTree,
            musicNoteEighth: mdiMusicNoteEighth,
            cart: mdiCart,
            chevronRight: mdiChevronRight,
            chevronLeft: mdiChevronLeft,
            beach: mdiBeach,
            hiking: mdiHiking,
            brain: mdiBrain,
            mapMarkerPath: mdiMapMarkerPath,
            earth: mdiEarth,
            heart: mdiHeart
        },
        sets: {
            mdi,
        },
    },
})

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const pinia = createPinia();
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(vuetify)
            .use(pinia)
            .use(ZiggyVue)
            .use(VueGoogleMaps, {
                load: {
                    key: import.meta.env.VITE_GOOGLE_MAPS_API_KEY,
                    language: 'es',
                },
                autobindAllEvents: true,
                installComponents: true
            })
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
