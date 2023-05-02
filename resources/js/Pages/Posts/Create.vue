<template>
    <div class="container mx-auto">
        <form class="mt-20" @submit.prevent="submit">
            <div>
                <div>
                    <label
                        for="title"
                        class="block font-medium text-sm text-gray-700"
                    >
                        Title
                    </label>
                    <input
                        v-model="form.title"
                        type="text"
                        id="title"
                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    />
                </div>

                <div class="mt-4">
                    <label
                        for="content"
                        class="block font-medium text-sm text-gray-700"
                    >
                        Description
                    </label>
                    <textarea
                        v-model="form.description"
                        id="content"
                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    ></textarea>
                </div>

                <div>
                    <label
                        for="image"
                        class="block font-medium text-sm text-gray-700"
                    >
                    </label>
                    <input
                        @input="form.image = $event.target.files[0]"
                        type="file"
                        id="title"
                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    />
                    <progress
                        v-if="form.progress"
                        :value="form.progress.percentage"
                        max="100"
                    >
                        {{ form.progress.percentage }}%
                    </progress>
                </div>
            </div>

            <div class="py-4">
                <button
                    type="submit"
                    class="inline-block px-4 py-3 bg-blue-500 text-white rounded"
                >
                    Add post
                </button>
                <a
                    href=""
                    class="ml-2 inline-block px-4 py-3 bg-gray-100 rounded"
                >
                    Cancel
                </a>
            </div>
        </form>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/vue3";

export default {
    name: "Create",
    components: {},

    setup() {
        const form = useForm({
            title: null,
            description: null,
            image: null,
        });

        function submit() {
            form.post("/storePost");
        }

        return { form, submit };
    },
};
</script>
