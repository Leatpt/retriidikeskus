<div class="relative bg-rose-100 overflow-visible overflow-x-hidden">
    <div class="pointer-events-none absolute top-200 left-0 w-full h-[1700px] z-0">
        <img src="{{ asset('bgShape.svg') }}" class="w-full h-full object-cover" alt="shape" />
    </div>
    <div id="top" class="relative">
        <div class="min-h-screen relative bg-lime-50 text-white rounded-br-full overflow-hidden">
            <img
                src="{{ asset('oruMainPicture.jpg') }}"
                alt="welcomeImage"
                class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 z-10 pointer-events-none rounded-br-full shadow-[inset_-20px_-20px_40px_rgba(0,0,0,0.9)]">
            </div>
            <div class="relative z-10 flex flex-col items-center justify-center h-screen px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl md:text-6xl text-white font-bold text-shadow-lg/70">Tarvis on vähe, <span class="">õigupoolest üht!</span></h1>
            </div>

        </div>
        <livewire:retriit-flower-button-modal />
    </div>
    <div id="kuukava" class="relative scroll-mt-50 text-gray-700 mb-6">
        <div class="relative mt-32">
            <h1 class="flex items-center justify-center mb-8 text-3xl text-gray-700 font-bold">Tulevad sündmused</h1>
        </div>
        <div
            class="flex flex-row items-center justify-center gap-6 w-full mb-12">
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 w-full mb-12">
                <div class="wheel-left relative w-96 h-96">
                    <div class="relative flex items-center justify-center rounded-full bg-white w-96 h-96 z-10 shadow-[35px_35px_0_rgba(0,0,0,0)] shadow-rose-400">
                        <div class="overflow-auto w-full h-full flex items-center justify-center p-4">
                            <livewire:calendar />
                        </div>
                    </div>
                </div>
                <div class="wheel-right relative w-120 h-120">
                    <div class="relative flex items-center justify-center rounded-full bg-white w-120 h-120 z-10 shadow-[15px_-15px_0_rgba(0,0,0,0)] shadow-purple-400">
                        <div class="overflow-auto w-full h-full flex items-center justify-center p-6 w-5/6 h-5/6 rounded-full">
                            <livewire:event-details />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-rose-100">
        <div class="bg-lime-100 py-16 rounded-tr-full rounded-br-full relative">
            <div id="meist" class="scroll-mt-60 container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8 text-gray-800">
                <div class="flex flex-row items-stretch">
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">Meist</h2>
                        <p class="text-lg leading-relaxed text-justify">
                            Sihtasutus Oru Evangeelne Rahvaõpistu (reg. nr. 90014856) on asutanud EELK Tuhala Kaarli kogudus (reg. nr. 80210154).
                        </p>
                        <p class="mt-4 text-xl leading-relaxed text-justify">
                            Rahvaõpistu ehk koolituskeskuse põhisuunaks on kristliku süvatraditsiooni tutvustamine läbi erinevate õpikodade: KASVU-ÕPIKODA, VAIKUSE ÕPIKODA (retriit), VAIKUSE RÄNNAK, laagrid, teemapäevad, talgud ja töötoad…
                        </p>
                        <p class="mt-4 text-lg leading-relaxed">
                            RAHVAÕPISTU on asutatud Tuhala kogudusele kuuluva Oru mõisa kordategemiseks ja korrashoidmiseks.
                        </p>
                    </div>
                    <div class="w-1/2 px-6 flex items-center justify-center hidden lg:flex">
                        <div class="rounded-full overflow-hidden aspect-square max-h-[350px] border-4 border-rose-400">
                            <img src="{{ asset('meist.jpg') }}"
                                alt="Oru mõis"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kajastused" class="relative bg-rose-100 scroll-mt-50">
        <div class="bg-rose-100 py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8 text-gray-800">
                <div class="flex flex-row items-stretch">
                    <div class="w-1/2 px-6 flex items-center justify-center hidden lg:flex">
                        <div class="rounded-full overflow-hidden aspect-square max-h-[350px] border-4 border-lime-200">
                            <img src="{{ asset('kajastused.jpg') }}"
                                alt="Oru mõis"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 pr-6">
                        <h2 class="text-3xl font-bold mb-4">Kajastused Meedias</h2>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="http://test.kose.ee/leht/detsember21.pdf"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Kose Teataja”</a>
                            – lk 5, koguduse ja rahvaõpistu tegemistest 2021 artiklis “Lihtsuse õpikoda advendiaja valguses 2021”
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="https://vikerraadio.err.ee/1608174085/kirikuelu-vaimsete-praktikate-tagasitee-kirikusse"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Vaimsed praktikad kirikus”</a>
                            – Vikerraadio “Kirikuelu” 25.04.2021
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="https://www.pereraadio.ee/uus/index.php?option=com_content&view=article&id=5006%3Ahommikupalvused-2020-02&catid=60%3Ahommikupalvus&Itemid=1"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Hommikupalvused 02.2020”</a>
                            – Kliki ja seejärel keri lehe allossa
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="https://www.pereraadio.ee/uus/index.php?option=com_content&view=article&id=5006%3Ahommikupalvused-2020-02&catid=60%3Ahommikupalvus&Itemid=1"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Hommikupalvused 02.2020”</a>
                            – Kliki ja seejärel keri lehe allossa
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="https://www.pereraadio.ee/uus/index.php?option=com_content&view=article&id=4492%3Aelupuu-2019&catid=66%3Aelupuu&Itemid=1"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Oru Evangeelsest Rahvaõpistust”</a>
                            – Pereraadio saates “Elupuu” 27.11.2019
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="https://raadio7.ee/podcast/mottekoda-2019-11-20/"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Palverännakust Taize vennaskonda”</a>
                            – Pereraadio ja Raadio 7 ühissaates “Mõttekoda” 2019-11-20
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="http://test.kose.ee/leht/september19.pdf"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Kose Valla Teataja”</a>
                            – September 2019, lk 8
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <a href="https://eestikirik.ee/oru-evangeelne-rahvaopistu-alustas-tegevust"
                                class="text-rose-400 hover:text-rose-600 font-bold"
                                target="_blank">“Eesti Kirik”</a>
                            – August 2019
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="opikojad" class="bg-rose-100 scroll-mt-20 relative">
        <div class="bg-lime-100 py-16 rounded-tr-full rounded-br-full">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8 text-gray-800">
                <div class="flex flex-row items-stretch">
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-3xl font-bold mb-6">Õpikojad</h2>
                        <p class="text-lg leading-relaxed text-justify mb-2">
                            <span class="font-bold">PIIBLI ÕPIKODA</span> - Loeng-praktikumid Piibli lugude tutvustamiseks – Piibel on raamat inimesest ja
                            tema arenguloost; täiskasvanuks saadakse Uues Testamendis väljendatud evangeeliumite juhiste kaudu
                            Jeesuse sõnades.
                        </p>
                        <p class="text-lg leading-relaxed text-justify mb-2">
                            <span class="font-bold">VAIKUSE ÕPIKODA ehk RETRIIT</span> - Vaikuse õpikoda meelerahu taastamiseks. Tavaliselt nädalalõpus
                            (reede õhtust 19:00 kuni pühapäeva pealelõunani15:00). Sõlmitakse kas osaline või täielik vaikuse
                            kokkulepe; loobutakse nutivahenditest jm müra tekitavatest masinatest; osaletakse päevakava alusel
                            erinevates toimingutes (harjutustes), mis lõpptulemusena väljendub meelerahuna.
                        </p>
                        <p class="text-lg leading-relaxed text-justify mb-2">
                            <span class="font-bold">VAIKUSE RÄNNAK</span> - Retriitide sissejuhatusena kas õues (7,5 km) või siseruumides (nö
                            “sisemaailmas”).
                        </p>
                        <p class="text-lg leading-relaxed text-justify mb-2">
                            <span class="font-bold">PALVERÄNNAK</span> - Kristliku süvakultuuri radadel; nt on käidud Patmosel (Uue Testamendi Johannese Ilmutusraamatu sündimise koht),
                            Iisraelis ja külastatud pühapaiku Eestis, Lätis, Leedus, Poolas. Palverännak on üks retriidi vorme.
                        </p>
                        <p class="text-lg leading-relaxed text-justify mb-2">
                            <span class="font-bold">KASVU-ÕPIKODA</span> - Loeng-praktikumid kasvatusega tegelevale inimesele.
                        </p>
                    </div>
                    <div class="w-1/2 px-6 flex items-center justify-center hidden lg:flex">
                        <div class="rounded-full overflow-hidden aspect-square max-h-[500px] border-4 border-rose-400">
                            <img src="{{ asset('opikojad.jpg') }}"
                                alt="Oru mõis"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="toetajad" class="bg-rose-100 scroll-mt-20 relative">
        <div class="bg-rose-100 py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8 text-gray-800">
                <div class="flex flex-row items-stretch">
                    <div class="w-1/2 px-6 flex items-center justify-center hidden lg:flex">
                        <div class="rounded-full overflow-hidden aspect-square max-h-[350px] border-4 border-lime-200">
                            <img src="{{ asset('toetajad.png') }}"
                                alt="Oru mõis"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 pr-6">
                        <h2 class="text-3xl font-bold mb-4">Toetajad</h2>
                        <h3 class="text-xl mb-2 font-bold">Tänumeeles:</h3>
                        <p class="text-lg leading-relaxed text-justify">
                            <span class="text-rose-400 font-bold">Kose Vald</span> – 2021 projektitoetus “Naiste- ja meeste käsitöötoa õpikojad”
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <span class="text-rose-400 font-bold">KOP</span> – 2021 kevadvooru projektitoetus (nr RE.2.03.21-0582) “MEESTE KÄSITÖÖTOA PUIDUTÖÖSEADMED ORU
                            RAHVAÕPISTULE”.
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <span class="text-rose-400 font-bold">Leader meede 1</span> – Elukeskkonna arendamine – projektitoetus 2019: Oru mõisa küte – I etapp. Küttesüsteemi (õhk-vesi) paigaldus.
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <span class="text-rose-400 font-bold">Pereraadio</span>
                        </p>
                        <p class="text-lg leading-relaxed text-justify">
                            <span class="text-rose-400 font-bold">Raadio 7</span>
                        </p>
                        <h3 class="text-xl mb-2 font-bold mt-4">Praegu käsil:</h3>
                        <a href="https://www.facebook.com/oru.rahvaopistu/posts/pfbid06no3ryB62X4WFnMosJ8YUj8idpRi3E5XZpZbTwaK43kEvkQEpvMgU6rGMAxLeppCl" target="_blank">
                            <div class="flex flex-row items-center text-blue-500 hover:text-blue-700 cursor-pointer">
                                <x-ionicon-logo-facebook class="w-5 h-5" />
                                <p class="text-lg leading-relaxed text-justify ml-1 underline">
                                    Oru mõisahoone-kogudusemaja köögi renoveerimine
                                </p>
                            </div>
                        </a>
                        <p class="text-lg leading-relaxed text-justify">
                            LEADER projektitoetus 2023-2027, 3 Kogukondade võimekuse suurendamine
                        </p>
                        <livewire:donation-modal />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="kontakt" class="bg-lime-100 py-14 bottom-0 w-full border-t-2 border-gray-700 border-dotted relative">
        <div class="scroll-mt-50 container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8">
            <div class="flex flex-row items-stretch">
                <div class="w-1/3 px-6 flex items-center justify-center lg:flex">
                    <livewire:send-email-modal />
                </div>
                <div class="w-1/3 px-6 flex items-center justify-center lg:flex">
                    <livewire:phone-number-modal />
                </div>
                <div class="w-1/3 px-6 flex items-center justify-center lg:flex">
                    <div>
                        <div class="rounded-full overflow-hidden aspect-square max-h-[200px] border-6 border-emerald-600 hover:border-emerald-800" alt="leia meid">
                            <a href="https://www.google.com/maps/place/Oru+m%C3%B5is/@59.1898759,24.9831921,17z/data=!3m1!4b1!4m6!3m5!1s0x4692db7d85d3b6b5:0xa06618dd62804917!8m2!3d59.1898759!4d24.985767!16s%2Fg%2F11bywvxk7z?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank"><x-ionicon-location class="text-emerald-600 hover:text-emerald-800 w-20 h-20 p-2" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div x-data="{ show: false }"
        x-on:scroll.window="show = window.pageYOffset > 200">
        <a
            href="#"
            x-show="show"
            x-transition
            x-on:click.prevent="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-5 right-5 bg-none text-3xl text-rose-400 px-3 py-2 rounded-full outline-2 hover:text-rose-600 transition">
            ↑
        </a>
    </div>
</div>