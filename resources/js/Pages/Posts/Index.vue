<template>
    <div class="container mx-auto ">

        <a href="/storePost" class="inline-block px-4 py-3 bg-blue-500 text-white rounded mb-4 mt-5">Add new post</a>
        <table class="mt-4 min-w-full divide-y divide-gray-200 border">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left">
                        <span
                            class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            >ID</span
                        >
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left">
                        <span
                            class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            >Title</span
                        >
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left">
                        <span
                            class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            >Content</span
                        >
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left">
                        <span
                            class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            >Created at</span
                        >
                    </th>

                    <th>

                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                <tr v-for="post in posts" :key="post.id">
                    <td
                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900"
                    >
                        {{ post.id }}
                    </td>

                    <td
                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900"
                    >
                        {{ post.title }}
                    </td>

                    <td
                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900"
                    >
                       {{ post.description }}
                    </td>

                    <td
                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        <img :src="`storage/${post.image}`" width="150" height="150" alt="Image description">
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    <a class="px-2 py-1 bg-blue-600 text-white rounded font-bold uppercase mr-2">Edit</a>
                    <a  type="button" class="px-2 py-1 bg-red-600 text-white rounded font-bold uppercase">
                        Delete
                    </a>
                </td>

                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>


export default {
    name: "Index",
    components: {
    },
    props: {
        posts: Object,
    },
};
</script>
