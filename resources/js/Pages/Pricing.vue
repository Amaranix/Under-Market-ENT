<template>
    <Head title="Pricing" />

    <CustomerLayout>
        <div class="pt-[14%] sm:pt-[12%] md:pt-[12%] lg:pt-[6%] mx-auto">
            <div class="container">
                <!-- banner -->
                <section
                    class="text-center md:w-1/2 mx-auto my-[4rem] md:mb-[6rem] md:mt-[2rem]"
                >
                    <p class="text-[2rem] font-bold">Pricing</p>
                    <h1 class="text-5xl font-bold text-primary lg:my-5 my-4">
                        10%  Solde
                    </h1>
                    <p class="font-medium">
                       Nous voulons que vous viviez une vie meilleure,
                        ne vous concentrez pas sur les coûts. C'est pourquoi nous n'avons pas
                        frais mensuels et ne prélèvent qu'une petite déduction sur
                        chaque vente.
                    </p>
                </section>
                <!-- end banner -->

                <!-- faq -->
                <div class="mb-[1.62rem]">
                    <h1 class="lg:text-[2rem] text-2xl font-bold mb-5">
                        Questions fréquemment posées
                    </h1>
                    <p class="font-medium">
                        Vous ne voyez pas votre question ? Visitez le centre d'aide
                        nous.
                    </p>
                </div>
                <div class="mx-10 md:mx-24">
                    <button
                        v-for="(value, key) in faq"
                        :key="key"
                        @click="toggleCollapse(key)"
                        class="bg-white text-start px-[1.8rem] shadow-collapse w-full py-[.69rem] mb-5"
                        :class="
                            collapsed[key] ? 'rounded-full' : 'rounded-2xl pb-8'
                        "
                    >
                        <div class="flex gap-8 items-center">
                            <h1 class="font-bold">
                                {{ collapsed[key] ? "+" : "-" }}
                            </h1>
                            <h1 class="font-bold text-lg xl:text-2xl">
                                {{ value.question }}
                            </h1>
                        </div>

                        <div v-if="!collapsed[key]" class="mt-5">
                            <h1>{{ value.answer }}</h1>
                        </div>
                    </button>
                </div>
                <!-- end faq -->

                <!-- slogan -->
                <section class="my-[4rem] md:my-[6.25rem] bg-[#72c62b]">
                    <div class=" py-12">
                        <h1
                            class="text-center text-white text-2xl xl:text-[2rem] font-semibold xl:w-4/5 mx-auto"
                        >
                           Partagez vos produits numériques. <br />
                            Quelqu’un en a besoin.
                        </h1>
                        <div class="mt-4 text-center">
                            <Link
                                :href="route('dashboard')"
                                class="block w-max mx-auto bg-white text-primary py-2.5 px-14 border border-primary rounded-full font-semibold hover:shadow-lg"
                                >Commencer à vendre</Link
                            >
                        </div>
                    </div>
                </section>
                <!-- end slogan -->
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import { ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import CustomerLayout from "@/Layouts/CustomerLayout.vue";

const collapsed = ref({});

const faq = ref([
    {
        question: "Que puis-je vendre sur Under ?",
        answer: "Contrairement à d’autres plateformes, Under ne vous facture pas de frais mensuels. Au lieu de cela, nos frais sont déduits sous la forme d'un petit pourcentage de chaque vente, nous ne gagnons donc de l'argent que lorsque vous le faites.",
    },
    {
        question: "Comment puis-je être payé ?",
        answer: "L'objectif de Under est d'aider les créateurs à gagner leur vie en faisant ce qu'ils aiment, c'est pourquoi nous simplifions au maximum le paiement. La façon dont nous rémunérons les créateurs, soit par dépôt direct.",
    },
    {
        question: "Quels sont les coûts ?",
        answer: "Contrairement à d’autres plateformes, Under ne vous facture pas de frais mensuels. Au lieu de cela, nos frais sont déduits sous la forme d'un petit pourcentage de chaque vente, nous ne gagnons donc de l'argent que lorsque vous le faites.",
    },
    {
        question: "Puis-je utiliser Under pour devenir membre ?",
        answer: "Oui! Qu'il s'agisse de podcasts, de cours en ligne ou d'abonnements SaaS, Under facilite la gestion des adhésions.",
    },
]);

faq.value.forEach((item, index) => {
    collapsed.value[index] = true;
});

const toggleCollapse = (key) => {
    collapsed.value[key] = !collapsed.value[key];
};
</script>

<style scoped>
.container {
    max-width: 1180px;
}
.box_slogan {
    border-radius: 1.25rem;
    background: linear-gradient(
        134deg,
        #feb20e 0%,
        rgba(254, 178, 14, 0.5) 100%
    );
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);
}
</style>
