import "../css/app.css";
import "./bootstrap";
import "vue-toastification/dist/index.css";

import { createApp, h } from "vue";
import { createInertiaApp, router } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { useDark } from "@vueuse/core";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import Toast, { useToast } from "vue-toastification";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(Toast)
            .mount(el);
    },
    progress: {
        color: "#dc2626",
        delay: 50,
    },
});

useDark();

router.on("success", function (e) {
    const toast = useToast();

    if (e.detail.page.props.flash.success) {
        toast.success(e.detail.page.props.flash.success);
    }

    if (e.detail.page.props.flash.error) {
        toast.error(e.detail.page.props.flash.error);
    }
});
