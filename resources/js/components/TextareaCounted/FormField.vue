<template>
    <default-field :field="field" :errors="errors" :full-width-content="true">
        <template slot="field">
            <textarea
                    class="w-full form-control form-input form-input-bordered py-3 h-auto"
                    :id="field.attribute"
                    :dusk="field.attribute"
                    v-model="value"
                    v-bind="extraAttributes"
            />

            <charcounter :value="value" :max-chars="field.maxChars" :warning-threshold="field.warningAt"></charcounter>
        </template>
    </default-field>
</template>

<script>
    import { FormField, HandlesValidationErrors } from 'laravel-nova';
    import Charcounter from '../Charcounter';

    export default {
        mixins: [FormField, HandlesValidationErrors],

        components: {
            Charcounter
        },

        props: {
            resourceName: { type: String },
            field: {
                type: Object,
                required: true,
            },
        },

        computed: {
            defaultAttributes() {
                return {
                    rows: this.field.rows,
                    class: this.errorClasses,
                    placeholder: this.field.name,
                }
            },

            extraAttributes() {
                const attrs = this.field.extraAttributes

                return {
                    ...this.defaultAttributes,
                    ...attrs,
                }
            },
        },
    }
</script>
