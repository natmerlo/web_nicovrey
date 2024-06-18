<nav class="fixed top-0 z-20 w-full bg-negro start-0 font-roboto text-blanco">
    <div class="flex flex-wrap items-center justify-between px-4 py-5 mx-auto uppercase max-w-screen-2xl md:px-12">

        <div class="flex space-x-3 lg:order-2 lg:space-x-0 rtl:space-x-reverse">
            <button wire:click="toggleMenu" type="button"
                class="inline-flex items-center justify-center w-10 h-10 pr-2 text-sm text-blanco lg:hidden focus:outline-none focus:ring-2 focus:ring-negro"
                aria-controls="navbar-sticky" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24" fill="#EAEAEA"
                    class="transition-all hover:fill-rosa">
                    <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
                </svg>
            </button>
        </div>

        <div class="flex items-center lg:order-2 lg:text-center">
            <a href={{route('index')}} class="flex items-center space-x-3 rtl:space-x-reverse">
                <h1
                    class="self-center text-4xl font-bold transition-all md:text-[45px] whitespace-nowrap hover:text-rosa">
                    Nico V Rey</h1>
            </a>
        </div>

        <div class="flex justify-end space-x-3 lg:w-1/3 lg:space-x-6 lg:order-3">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EAEAEA"
                    class="transition-all hover:fill-rosa">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
            </a>

            <a href="" class="hover:text-rosa">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"
                    fill="#EAEAEA" class="transition-all hover:fill-rosa">
                    <path
                        d="M19.098 10.638c-3.868-2.297-10.248-2.508-13.941-1.387-.593.18-1.22-.155-1.399-.748-.18-.593.154-1.22.748-1.4 4.239-1.287 11.285-1.038 15.738 1.605.533.317.708 1.005.392 1.538-.316.533-1.005.709-1.538.392zm-.126 3.403c-.272.44-.847.578-1.287.308-3.225-1.982-8.142-2.557-11.958-1.399-.494.15-1.017-.129-1.167-.623-.149-.495.13-1.016.624-1.167 4.358-1.322 9.776-.682 13.48 1.595.44.27.578.847.308 1.286zm-1.469 3.267c-.215.354-.676.465-1.028.249-2.818-1.722-6.365-2.111-10.542-1.157-.402.092-.803-.16-.895-.562-.092-.403.159-.804.562-.896 4.571-1.045 8.492-.595 11.655 1.338.353.215.464.676.248 1.028zm-5.503-17.308c-6.627 0-12 5.373-12 12 0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12z" />
                </svg>
            </a>

        </div>

        <div class="{{ $menuOpen ? 'block' : 'hidden' }} items-center justify-between w-full lg:flex lg:w-auto text-[19px] lg:text-base"
            id="navbar-sticky">
            <ul class="flex flex-col mt-4 font-medium lg:p-0 lg:font-normal lg:flex-row lg:mt-0 lg:space-x-6">
                <li>
                    <a href="{{route('index')}}#contacto"
                        class="block px-3 py-4 text-white transition-all border-b border-[#464646] lg:bg-transparent lg:p-0 hover:text-rosa lg:border-transparent active:text-rosa"
                        aria-current="page">Contacto</a>
                </li>
                <li>
                    <a href="{{route('index')}}#sobre-mi"
                        class="block px-3 py-4 text-white transition-all border-b border-[#464646] lg:bg-transparent lg:p-0 hover:text-rosa lg:border-transparent active:text-rosa">Sobre
                        mí</a>
                </li>
                <li>
                    <a href="{{route('jobs')}}"
                        class="block px-3 pt-4 text-white transition-all lg:bg-transparent lg:p-0 hover:text-rosa active:text-rosa">Trabajos</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
