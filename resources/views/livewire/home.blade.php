<div>
    <div id="top" class="bg-rose-100 relative overflow-hidden">
        <div class="min-h-screen relative bg-lime-50 text-white rounded-br-full overflow-hidden">
            <img
                src="{{ asset('oruMainPicture.jpg') }}"
                alt="welcomeImage"
                class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 z-10 pointer-events-none rounded-br-full shadow-[inset_-20px_-20px_40px_rgba(0,0,0,0.9)]"></div>
            <div class="relative z-10 flex flex-col start-left justify-center h-screen px-4 sm:px-6 lg:px-8">
                <h1 class="text-9xl text-white font-bold text-shadow-lg/70">Tarvis on vähe, <span class="block 2xl:ml-[25%]">õigupoolest üht!</span></h1>
            </div>
        </div>
        <div class="pointer-events-none absolute bottom-10 right-10 z-15 flex items-center justify-center">
            <img class="w-60 h-60 animate-[spin_9s_infinite]" src="{{ asset('flower.svg') }}" alt="flowerOutline">
        </div>

        <button class="bg-lime-200 border-solid border-4 border-gray-800 rounded-full w-32 h-32 absolute bottom-24 right-24 z-20 flex flex-col items-center justify-center text-gray-800 hover:bg-rose-400 transition duration-300 text-xl font-bold transform hover:scale-110">
            Retriidile
        </button>
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



    <div id="kuukava" class="pt-20 bg-rose-100 text-gray-700 py-16 -mt-44">
        <div class="mt-32">
            <h1 class="flex items-center justify-center mb-8 text-3xl text-gray-700 font-bold">Tulevad sündmused</h1>
        </div>

        <div
            class="flex flex-row items-center justify-center gap-6 w-full mb-12">
            <div class="flex flex-row items-center justify-center gap-6 w-full mb-12">
                <div class="wheel-left relative w-96 h-96">
                    <div class="relative flex items-center justify-center rounded-full bg-white w-96 h-96 z-10 ">
                        <div class="overflow-auto w-full h-full flex items-center justify-center p-4">
                            <livewire:calendar />
                        </div>
                    </div>
                </div>
                <div class="wheel-right relative w-96 h-96">
                    <div class="relative flex items-center justify-center rounded-full bg-white w-96 h-96 z-10">
                        <div class="overflow-auto w-full h-full flex items-center justify-center p-4 w-5/6 h-5/6 rounded-full">
                            <livewire:event-details />
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-rose-100">
            <div class="bg-lime-100 py-16 rounded-tr-full rounded-br-full">
                <div id="meist" class="container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8">
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
        <div id="kajastused" class="bg-rose-100">
            <div class="bg-rose-100 py-16">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8">
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
        <div id="opikojad" class="bg-rose-100">
            <div class="bg-lime-100 py-16 rounded-tr-full rounded-br-full">
                <div id="meist" class="container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8">
                    <div class="flex flex-row items-stretch">
                        <div class="w-full lg:w-1/2">
                            <h2 class="text-3xl font-bold mb-6">Õpikojad</h2>
                            <p class="text-lg leading-relaxed text-justify mb-2">
                                <span class="font-bold">KASVU-ÕPIKODA</span> - Seminar-õpikoda kasvuhuvis inimesele.
                            </p>
                            <p class="text-lg leading-relaxed text-justify mb-2">
                                <span class="font-bold">VAIKUSE RÄNNAK</span> - Retriitide sissejuhatusena kas õues (7,5 km) või siseruumides (nö “sisemaailmas”).
                            </p>
                            <p class="text-lg leading-relaxed text-justify mb-2">
                                <span class="font-bold">RETRIIT</span> - Vaikuse õpikoda meelerahu taastamiseks. Tavaliselt nädalalõpus (reede õhtust 19:00 kuni pühapäeva pealelõunani15:00). Sõlmitakse kas osaline või täielik vaikuse kokkulepe; loobutakse nutivahenditest jm müra tekitavatest masinatest; osaletakse päevakava alusel erinevates toimingutes (harjutustes), mis lõpptulemusena väljendub meelerahuna. VAJALIK: kaasa võtta ööbimis- ja hügieenitarbed, lebomatt ja tekk (virgutused ja lõdvestused), töö- ja rännaku riided ning jalatsid, märkmevihk.
                            </p>
                            <p class="text-lg leading-relaxed text-justify mb-2">
                                <span class="font-bold">TÖÖHARJUTUS</span> - Erinevad tööd-tegemised mõisas, ja selle ümber; aitab ärgata ja märgata (peamiselt retriitide ühe osana).
                            </p>
                            <p class="text-lg leading-relaxed text-justify mb-2">
                                <span class="font-bold">PALVERÄNNAK</span> - Kristliku süvakultuuri radadel; nt on käidud Patmosel (Uue Testamendi Johannese Ilmutusraamatu sündimise koht), Iisraelis ja külastatud pühapaiku Eestis, Lätis, Leedus, Poolas.
                            </p>
                            <p class="text-lg leading-relaxed text-justify mb-2">
                                <span class="font-bold">NAISTE JA MEESTE KÄSITÖÖ-TOAD</span> - Erinevatel teemadel, vt <a href="#kuukava" class="text-lime-600 hover:text-lime-700 font-bold">kuukava</a>.
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
        <div id="toetajad" class="bg-rose-100">
            <div class="bg-rose-100 py-16">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 sm:pr-8">
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
                            <p class="text-lg leading-relaxed text-justify">
                                Oru mõisahoone-kogudusemaja köögi renoveerimine
                            </p>
                            <div class="inline-flex flex-row align-right mt-6 uppercase bg-rose-500 text-white font-bold rounded-full px-4 py-2 hover:bg-rose-700 cursor-pointer">
                                <x-coolicon-heart-01 class="w-8 h-8 mr-2 cursor-pointer" />
                                <button class="uppercase cursor-pointer">Toeta Oru Rahvaõpistu Tegemisi</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>