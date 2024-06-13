<template>
    <Head title="Conditions d'utilisation" />

    <CustomerLayout>
        <div class="pt-[14%] sm:pt-[12%] md:pt-[12%] lg:pt-[6%] mx-auto">
            <div class="container">
                <section class="mt-5 text-center text-[40px] font-semibold">
                    <h1>Under</h1>
                    <h1>Conditions d'utilisation</h1>
                </section>
                <section class="my-20">
                    <div v-for="item in items">
                        <h3 class="text-[28px] font-medium">{{ item.title }}</h3>
                        <p class="text-[18px] my-4">{{ item.description }}</p>
                    </div>
                    <p class="text-[18px] my-4">Merci d'avoir utilisé nos services et produits. Bonne chance pour vos achats et vos créations sur Under!</p>
                </section>
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
const items= {
    item1: { title: "1. Introduction", description: "Bienvenue sur la plateforme numérique Under ! En utilisant nos services et produits, vous acceptez les conditions d'utilisation qui suivent. Veuillez les lire attentivement avant de continuer." },
    item2: { title: "2. Droit d'auteur intellectuel", description: "Tout le contenu disponible sur la plateforme Under, y compris les textes, images, sons, vidéos, logos et marques, est la propriété de Under ou de tiers qui nous ont accordé une licence. Il est interdit d'utiliser, modifier, distribuer ou de modifier le contenu sans autorisation écrite de notre part ou du propriétaire des droits d'auteur." },
    item3: { title: "3. Utilisation de la plateforme", description: "Nous vous octroyons une licence pour accéder à la plateforme Under et l'utiliser pour des objectifs personnels et non commerciaux. Vous acceptez de ne pas utiliser la plateforme pour des objectifs illégaux, diffamatoires ou qui portent atteinte aux droits d'auteur des tiers. Toute violation de cette règle entraînera une interdiction de l'accès et des poursuites judiciaires conformément aux lois en vigueur." },
    item4: { title: "4. Produits numériques", description: "Les produits numériques disponibles sur la plateforme Under sont des créations de tiers ou de vendeurs. Nous ne sommes pas responsables de la qualité, du contenu ou des dommages des produits numériques vendus par des tiers. L'achat des produits numériques est sous la responsabilité de l'acheteur et nous ne fournissons pas de garantie sur ces produits." },
    item5: { title: "5. Confidentialité et sécurité", description: "Nous prenons soin de protéger vos informations personnelles conformément à notre politique de confidentialité. Cependant, nous ne pouvons pas garantir une sécurité totale lors de la transmission de données sur internet. Vous êtes responsable de la protection de vos informations personnelles et de votre compte." },
    item6: { title: "6. Changements dans les conditions d'utilisation", description: "Nous nous réservons le droit de modifier ou de mettre à jour les conditions d'utilisation à tout moment, sans préavis. Les modifications prendront effet immédiatement après leur publication sur la plateforme. En continuant d'utiliser la plateforme, vous acceptez les modifications apportées aux conditions d'utilisation." },
    item7: { title: "7. Contact", description: "Si vous avez des questions ou des préoccupations supplémentaires concernant les conditions d'utilisation, veuillez nous contacter à l'adresse suivante : [contact@alfryal.com](mailto:contact@alfryal.com)" },
}
</script>

<style scoped>
.container {
    max-width: 1180px;
}
</style>

