<template>
    <head title="Politique de Confidentialit " />

    <CustomerLayout>
        <div class="pt-[14%] sm:pt-[12%] md:pt-[12%] lg:pt-[6%] mx-auto">
            <div class="container">
                <section class="mt-5 text-center text-[40px] font-semibold">
                    <h1>Under</h1>
                    <h1>Politique de Confidentialit </h1>
                </section>
                <section class="my-20">
                    <p class="text-[18px] my-4">Nous sommes reconnaissants de l'importance de votre pr sence en tant que utilisateur de la plateforme Under. Pour assurer une exp rience d'achat et d'interaction positive pour tous les utilisateurs, voici quelques-unes des politiques  suivantes qui doivent  tre respect es lors de l'utilisation de nos services :</p>
                    <div v-for="item in items">
                        <h3 class="text-[28px] font-medium">{{ item.title }}</h3>
                        <p class="text-[18px] my-4">{{ item.description }}</p>
                    </div>
                    <p class="text-[18px] my-4">Si vous avez des questions ou des pr cations suppl mentaires concernant nos politiques, n' h sitez pas  contacter nous via les informations de contact qui sont disponibles sur la plateforme Under.</p>
                    <p class="text-[18px] my-4">Merci d'avoir choisi d' tre partie de la communaut  Under. Profitez de vos achats et des produits digitaux de haute qualit  propos s par nos cr ateurs !</p>
                </section>
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
const items= {
    item1: { title: "1. Politique de Confidentialit ", description: "Nous nous engageons  prot ger vos informations personnelles de fa on s curieuse et de les prot ger en vertu de notre politique de confidentialit . Vos informations personnelles seront utilis es conform ment  notre politique de confidentialit . Assurez-vous de lire et de comprendre notre politique de confidentialit  avant d'utiliser nos services." },
    item2: { title: "2. Politique d'Utilisation des Produits Num riques", description: "Chaque produit num rique disponible sur la plateforme Under est une cr ation de nos cr ateurs et vendeurs tiers. Lorsque vous utilisez un produit num rique, vous vous engagez  respecter les termes et conditions de notre politique d'utilisation des produits num riques. Les produits num riques que vous achetez ne sont utilisables que pour des objectifs personnels et non commerciaux." },
    item3: { title: "3. Politique des Paiements et des Remboursements", description: "Under offre diff rents moyens de pai s curis s et fiables pour faciliter vos achats. Veuillez v rifier vos informations de pai avant de finaliser votre transaction. Notre politique de remboursement et de retour des produits s'applique  tous les produits num riques achet s sur la plateforme Under. Veuillez lire et comprendre notre politique de remboursement et de retour des produits avant d'effectuer un achat." },
    item4: { title: "4. Politique d'Utilisation de la Plateforme", description: "L'utilisation de la plateforme Under est soumise  notre politique d'utilisation de la plateforme. Toute utilisation de la plateforme Under qui contrevient  nos conditions g n rales d'utilisation est strictement interdite. Toute utilisation abusive de la plateforme Under donnera lieu  une suspension ou une annulation de votre compte." },
    item5: { title: "5. Politique de S curit ", description: "Nous nous engageons  prot ger votre compte et vos informations personnelles. Nous vous conseillons de ne jamais partager vos informations de connexion avec qui que ce soit et de toujours  vous assurer de vous d connecter apr s avoir utilis  nos services." },
}
</script>

<style scoped>
.container {
    max-width: 1180px;
}
</style>
