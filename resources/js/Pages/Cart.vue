<template>
    <Head title="Cart" />

    <CustomerLayout>
        <div class="container">
            <div
                class="min-h-screen md:min-h-max flex justify-center flex-col text-center py-[28%]"
                v-if="cart.length < 1"
            >
                <h1 class="text-2xl xl:text-[30px] mb-4 font-semibold">
                   Votre panier<br />Toujours vide
                </h1>
                <Link
                    :href="route('discover')"
                    class="block cursor-pointer mx-auto bg-white w-max text-black py-2.5 px-14 border border-gray-700 rounded-full font-semibold hover:shadow-lg"
                    >Allons faire du shopping</Link
                >
            </div>
            <div class="pt-24 px-12 pb-[10%]" v-else>
                <div class="flex justify-between items-center mb-16">
                    <p class="text-3xl font-semibold">Keranjang</p>
                    <div class="text-center">
                        <Link
                            :href="route('discover')"
                            class="block cursor-pointer mx-auto bg-white w-max text-black py-2.5 px-14 border border-gray-700 rounded-full font-semibold hover:shadow-lg"
                            >Continuer vos achats</Link
                        >
                    </div>
                </div>
                <div class="grid xl:grid-cols-6 gap-5">
                    <div class="xl:col-span-4 flex flex-col gap-5">
                        <div
                            v-for="(product, index) in cart"
                            :key="index"
                            class="py-3 pl-3 pr-7 flex gap-2.5 rounded-3xl shadow-md"
                        >
                            <img
                                :src="'storage/' + product.product.image"
                                class="w-60 h-auto object-cover rounded-3xl"
                                alt=""
                            />
                            <div
                                class="w-full flex flex-col justify-center gap-2.5"
                            >
                                <p class="font-semibold text-xl">
                                    {{ product.product.name }}
                                </p>
                                <p class="font-medium">
                                    {{ product.product.user.name }}
                                </p>
                                <p class="font-semibold text-xl">
                                    {{
                                        new Intl.NumberFormat("fr-MA", {
                                            style: "currency",
                                            currency: "MAD",
                                            minimumFractionDigits: 0,
                                        }).format(product.product.price)
                                    }}
                                </p>
                                <div class="flex justify-between items-center">
                                    <p class="font-semibold">
                                        <!-- <span class="font-medium">{{
                                            product.qty
                                        }}</span> -->
                                    </p>
                                    <div class="text-end">
                                        <button
                                            type="button"
                                            class="block cursor-pointer mx-auto bg-red-500 w-max text-white py-2 mt-8 ms-auto px-8 border border-primary rounded-full font-semibold hover:shadow-lg"
                                            @click="destroy(product.product.id)"
                                        >
                                            Annuler
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-5 rounded-3xl shadow-md flex justify-between items-center text-xl font-semibold"
                        >
                            <p>Total</p>
                            <p class="text-primary">
                                {{
                                    new Intl.NumberFormat("fr-MA", {
                                        style: "currency",
                                        currency: "MAD",
                                        minimumFractionDigits: 0,
                                    }).format(total)
                                }}
                            </p>
                        </div>
                    </div>
                    <div class="xl:col-span-2">
                        <div class="px-4 pt-4 pb-8 rounded-3xl shadow-md">
                            <h2 class="text-lg font-semibold">
                               Coordonnées
                            </h2>
                            <p class="font-medium">Email</p>
                            <div class="flex flex-col items-center px-8 mt-9">
                                <p class="text-center font-medium">
                                  Toujours confus au sujet des méthodes de paiement comme
                                    Quoi
                                </p>
                                <button
                                    class="w-full py-3 mt-9 rounded-full font-semibold text-white bg-primary hover:bg-primary-hover hover:shadow-xl focus:bg-primary-active active:bg-primary-active focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                >
                                  Payer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
import { Head, Link, usePage } from "@inertiajs/vue3";
import { ref, computed } from "vue";
import { Inertia } from "@inertiajs/inertia";
// import { InertiaLink, useForm } from "@inertiajs/vue3";
// import { route } from "@inertiajs/vue3";

let total = 0;

const { props } = usePage();
const cart = ref(props.products);

for (const product of cart.value) {
    total += product.product.price;
}

// Method untuk menghapus item dari keranjang
const destroy = (id) => {
    if (confirm("retirer du panier?")) {
        Inertia.delete(route("removeToCart", id));
    }

    return { destroy };
};
</script>
