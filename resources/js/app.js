import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers"
import { mixins } from "./mixins/mixins";

createInertiaApp({
  resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
    .mixin(mixins)
    .use(plugin)
    .mount(el)
  },
});
InertiaProgress.init();