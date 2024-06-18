<style>
    .background-image {
        background-image: url('/img/bg_index_desk.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .background-image-mobile {
        background-image: url('/img/bg_index_mobile.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<div class="background-image">
    <div
        class="text-blanco font-semibold font-roboto text-5xl h-[90vh] justify-end items-center pr-20  hidden lg:flex max-w-screen-2xl mx-auto">

        <ul class="space-y-4 text-right uppercase">
            <li><a href="#productor" class="pl-8 pe-4 hover:bg-rosa hover:text-negro">.productor</a></li>
            <li><a href="#mix-mastering" class="pl-6 pe-4 hover:bg-rosa hover:text-negro">.mix & mastering</a></li>
            <li><a href="#sound-designer" class="pl-8 pe-4 hover:bg-rosa hover:text-negro">.sound designer</a></li>
        </ul>

    </div>

    <div
        class="text-blanco font-semibold font-roboto text-4xl h-[90vh] flex justify-end items-end pr-4 pb-8 background-image-mobile lg:hidden md:pr-20 md:pb-12">
        <ul class="space-y-4 text-right uppercase">
            <li><a href="#productor" class=" hover:bg-rosa hover:text-negro">.productor</a></li>
            <li><a href="#" class=" hover:bg-rosa hover:text-negro">.mix & mastering</a></li>
            <li><a href="#" class=" hover:bg-rosa hover:text-negro">.sound designer</a></li>
        </ul>
    </div>


</div>
