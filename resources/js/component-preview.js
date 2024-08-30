import ComponentPreview from "./components/fieldtypes/ComponentPreview.vue";

Statamic.booting(() => {
    Statamic.component('component_preview-fieldtype', ComponentPreview);
});
