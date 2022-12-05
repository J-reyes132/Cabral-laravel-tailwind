<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://images.visitarepublicadominicana.org/sancocho-gastronomia-republica-dominicana.jpg')">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Bienvenidos Restaurante Cabral</span>
        </h1>
        <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
            El mayor secreto del éxito es lograr comer lo que más te gusta y permitir que la comida haga su lucha en tu interior.
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Reservar Ahora
                </a>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <h3 class="text-xl">Nuestra Historia
                        </h3>
                        <h2 class="text-4xl text-green-600">Bienvenidos</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">

                        </p>
                        <div class="relative flex">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Restaurante el Cabral, se distingue por ofrecer un amplio menú criollo nacional,
                                liderado por el chef Joaquín Santos, uno de los cocineros con mas experencias
                                en comida nativa del país.

                                El lugar es referencia en la gastronomía de Santo Domingo, punto de encuentro entre empresarios,
                                profesionales, así como nacionales y extranjeros. El recinto tiene una bella decoración, cocina de
                                vanguardia y un servicio de primera.

                                Entre sus platos llamativos están los calamares, el pato y el churrasco.
                                Dirección: Paseo De Los Locutores #9, Piantini

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold">Sobre Nosotros</h2>
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            ¿POR QUÉ ELEGIRNOS?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">

                        </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Procesamiento más rápido</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Pagos Fáciles</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">100% de protección y seguridad</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png"
                        alt="feature image"></div>
            </div>
        </div>
    </section>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold"></h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                </h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                {{-- @foreach ($specials->menus as $menu) --}}
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        {{-- <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" /> --}}
                        <div class="px-6 py-4">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                {{-- {{ $menu->name }}</h4> --}}
                            {{-- <p class="leading-normal text-gray-700">{{ $menu->description }}.</p> --}}
                        </div>
                        <div class="flex items-center justify-between p-4">
                            {{-- <span class="text-xl text-green-600">${{ $menu->price }}</span> --}}
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                COPYRIGHT 2022.</h2>
            <p class="text-xl text-white"></p>
        </div>
        <div class="grid gap-2 lg:grid-cols-3">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://mail-attachment.googleusercontent.com/attachment/u/0/?ui=2&ik=b95ccbc7e1&attid=0.1&permmsgid=msg-f:1751318197572519099&th=184dee9f2efcc4bb&view=att&disp=safe&saddbat=ANGjdJ_Q4TqtUZamVLa5oX7Xn2CFT7wcXTQjfHZVvrtlzvDczrNMrh9ykdMRUiGeNQuoUeKYC3CiGNzZcKSyFVLbrd_8PMQQptv73mkjaLumurY_Y94a8Sm4F-sWyYNmpnGNx45hcFixTbmRSFbcDKh2LuNzPHB9eexUSdoHd8c6YiBOke3BdcOrZHSgWkuIvgbYJgZlxKQEIJ-oEpv1XjIgs3JJDjEalQUBYYGAPwTjxhhmkIDiweugwhs4bLsBOfU_jnD4jMCn6gD79T7_eW_37CM6rHxnlWeDwA9ybc0pD5UsXcHcx00P2r06JVEal8aD6OqakSHBWi2hyQNM-z_jianXT3tjSE4PdKdapiijo3LE6wPuFuLrt3ix4ZDnyTtE3ZDqK5NWmhE0rGDFIdNphWvYmFOqV0q25dGaGf4oxHMmMMjeSQtXdEIDy2xUVYIlu1ZK5rlv5RJbK991Pwi85gc6Lff4oDlicR4xhMukdhS4amoyZ6h63PkcisYxWOxPvmW6QW608Ph67kNtJNjSX63Iw_-Gw4hBTA3V55lsUcqZbmNaXs1vY_nR_haDH8mkvbqwxWCexACiCcyPNmrQr0uhqPPzygNccfuNcibttTGRjyCAwTg3MixdSChoVTLibDzAzGpquYOvhkED9bKpGmhBZrncVtoKEtEY6tWkyYHvdscT0SpaFv9V8HX-5Yq2L5J0eFblPA1cmlxa3TH2hBhjI1k_S2yz57q2v4-qxr0y-tgT568ZTWfaGHw8O9r3KynPhx4KmYqAmTnIbt5u-AHIHifhRA9YNMXfIeHXr_WeTxOD7uJXTyvzTuu3mwCcUbPB_an8efXDXqkQyo8_Y_gfSwokjmU363OGBUwpHclAYuVzOxwhkOG499vZ-TxCw-7ACCC7njX_60V3wH8lvbhfYmiwMCXpwLH5YZkhvsuikbVeoidS3td6gcI">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">ESTUDIANTE UCSD</h2>
                    <p class="mt-2 text-gray-600">

                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">JEAN PEREZ</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                    src="https://mail-attachment.googleusercontent.com/attachment/u/0/?ui=2&ik=b95ccbc7e1&attid=0.1&permmsgid=msg-f:1751319648209814727&th=184deff0efb544c7&view=att&disp=safe&saddbat=ANGjdJ-076wi0lRdPr-ByTq97pMsPCkKqI_ZyAWAYN5mSKgc6JUAk2Vk2A3FiKTqQ2yVblJifBsBD3K-WfYAE27_qFAy0DZhj5YAc5Xx5BjZ-8cikMjLWWfc7j7QCc7LBzk4sjh29SIzQOJKrADrz6e-JqMCxt23lYFJeUiOskuce9YqB0aR3fdBxkZx0H4BTcjao0WL5zjARt7-Fvg5jJsFlowAr1aK-BYpkNk3BefFnTNX-8ZnCGRBp53jkX_nsOi1MVegZ5LjETre_umO-rAhlS6kaNU144u2KARq_UDXVyjYCZgsb4cKiWHnwelTB0RptV_YKI2lO_7Uj1_54KoTstXvp8O-7lWFdYLSr1tBVKyqg7YH5VzUD0QzD1etajG5YMPKOPksfj-c077akX9XoaiDLhU2ifePKsei914CHuyko_0Bb9yv2TUX63iewX1E9o-NIgybZMUQKiVkPWOX5mtYB66XFdwPPpCIslyaptcNA36L1BY4bwDpLRiXgzjqOuN3eMUYLQR5i5PkCMcKPScDSi_Nfw6zGRopD7aFkOTsUmeOI_o1V6_LiWY5IIZ5eBn8n-6-ItmfRzQ-AWOCDoIDIj-7gUFBjGsi8xaHZ6lOl3Wul_arDUy-t-DuxqKF82ujfU7B2Wcca9V3UxlJ0s-Sxc_GnKJUGJ0H7I4w9_jxKecl0qvRhJJwG7ROvzDti1gCXUdkQIG3T9nM2n7NB-M5YWnxPp90meUMpAiEbgYFr4j90WGPcu1FzKU1NuGXr-gUP-nyWDtbWS_D8MBJXdzHTTKHd-nT-1Y77F-ukfNMVONVUh9DQnZ5XkQw822vRKvLf52frdNQJT6LSwtfPsHW8AlW0TJZra3GKMZHRIw92Wfek7JziRuy0aLU7q27IiBxGSrpOiReMwAAwmKT0FCa3_O44nQfRxTOxbuIiLAHicfjGRH4134ivCA">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">ESTUDIANTE UCSD</h2>
                    <p class="mt-2 text-gray-600">

                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">RAUL MORA</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://mail-attachment.googleusercontent.com/attachment/u/0/?ui=2&ik=b95ccbc7e1&attid=0.1&permmsgid=msg-f:1751319648209814727&th=184deff0efb544c7&view=att&disp=safe&saddbat=ANGjdJ-076wi0lRdPr-ByTq97pMsPCkKqI_ZyAWAYN5mSKgc6JUAk2Vk2A3FiKTqQ2yVblJifBsBD3K-WfYAE27_qFAy0DZhj5YAc5Xx5BjZ-8cikMjLWWfc7j7QCc7LBzk4sjh29SIzQOJKrADrz6e-JqMCxt23lYFJeUiOskuce9YqB0aR3fdBxkZx0H4BTcjao0WL5zjARt7-Fvg5jJsFlowAr1aK-BYpkNk3BefFnTNX-8ZnCGRBp53jkX_nsOi1MVegZ5LjETre_umO-rAhlS6kaNU144u2KARq_UDXVyjYCZgsb4cKiWHnwelTB0RptV_YKI2lO_7Uj1_54KoTstXvp8O-7lWFdYLSr1tBVKyqg7YH5VzUD0QzD1etajG5YMPKOPksfj-c077akX9XoaiDLhU2ifePKsei914CHuyko_0Bb9yv2TUX63iewX1E9o-NIgybZMUQKiVkPWOX5mtYB66XFdwPPpCIslyaptcNA36L1BY4bwDpLRiXgzjqOuN3eMUYLQR5i5PkCMcKPScDSi_Nfw6zGRopD7aFkOTsUmeOI_o1V6_LiWY5IIZ5eBn8n-6-ItmfRzQ-AWOCDoIDIj-7gUFBjGsi8xaHZ6lOl3Wul_arDUy-t-DuxqKF82ujfU7B2Wcca9V3UxlJ0s-Sxc_GnKJUGJ0H7I4w9_jxKecl0qvRhJJwG7ROvzDti1gCXUdkQIG3T9nM2n7NB-M5YWnxPp90meUMpAiEbgYFr4j90WGPcu1FzKU1NuGXr-gUP-nyWDtbWS_D8MBJXdzHTTKHd-nT-1Y77F-ukfNMVONVUh9DQnZ5XkQw822vRKvLf52frdNQJT6LSwtfPsHW8AlW0TJZra3GKMZHRIw92Wfek7JziRuy0aLU7q27IiBxGSrpOiReMwAAwmKT0FCa3_O44nQfRxTOxbuIiLAHicfjGRH4134ivCA">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">

                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
