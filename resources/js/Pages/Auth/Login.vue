<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="mt-[120px] lg:mt-0 lg:grid lg:grid-cols-5 lg:gap-14 items-center min-h-screen">
            <div class="lg:col-span-2 lg:ps-[4rem] lg:height_scroll">
                <h1
                    class="text-[28px] md:text-[32px] leading-normal font-medium text-center mb-10"
                >
                    Login
                </h1>
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel
                            for="email"
                            value="Email"
                            isRequired="true"
                        />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            placeholder=" Email"
                            required
                            autofocus
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            for="password"
                            value="Password"
                            isRequired="true"
                        />

                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password"
                            placeholder=" Password"
                            required
                            autocomplete="current-password"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.password"
                        />
                    </div>

                    <button
                        class="w-full mt-10 bg-primary hover:bg-primary-hover hover:shadow-xl focus:bg-gray-700 active:bg-primary-active inline-flex items-center justify-center py-3 border border-transparent rounded-full font-semibold text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Entrer
                    </button>
                    <p class="mt-3 text-sm">
                        Vous n'avez pas encore de compte? 
                        <Link
                            href="/register"
                            class="text-primary font-medium hover:underline"
                            >Créer un compte</Link
                        >
                    </p>
                </form>
            </div>
            <div class="hidden lg:block lg:col-span-3 banner_img">
                <div class="mask_img1">
                    <img src="/assets/auth-banner.png" alt="" />
                    <div class="content text-center text-white font-medium">
                        <h1 class="text-3xl px-4 mb-8">
                            Trouver les meilleurs produits numériques pour l'avenir
                            Toi
                        </h1>
                        <!-- <p>
                           Rejoignez plus de 147 388 créateurs qui
                            a gagné plus de Rp. 980 450 000 sur
                            Digi qui vend des produits numériques et des abonnements.
                        </p>
                        <div
                            class="flex justify-between font-normal mt-10 text-xs"
                        >
                            <div
                                class="border-2 border-white py-2 px-4 rounded-full"
                            >
                              Produit 100% original directement du créateur
                            </div>
                            <div
                                class="border-2 border-white py-2 px-4 rounded-full"
                            >
                                Vous pouvez ajouter cette fonctionnalité
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<style scoped>
.container {
    max-width: 1130px;
}
.banner_img {
    /* height: 100%; */
    overflow: hidden;
    padding: 1rem 0;
}
.height_scroll {
    overflow-y: scroll;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-left: 4rem;
    padding-right: 0.25rem;
}
.height_scroll::-webkit-scrollbar {
    display: none;
}
.mask_img1 {
    -webkit-mask-image: url("/assets/mask.png");
    mask-image: url("/assets/mask.png");
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    width: 100%;
    height: 100%;
    border-radius: 2rem;
    overflow: hidden !important;
    position: relative;
}
.mask_img1 img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.content {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding-left: 1.75rem;
    padding-right: 1.75rem;
    padding-bottom: 4rem;
}
</style>
