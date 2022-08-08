<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./css/tailwind.css" />
    <link rel="apple-touch-icon" type="text/png" href="img/touch/48.png" />
    <link rel="icon" href="image/icon.png" />
    <title>GH EXPERT</title>
</head>

<body>
    <header class="bg-teal-400 px-10 py-4 flex justify-between align-middle max-h-16 overflow-auto">
        <div class="text-white font-medium text-2xl">GH EXPERT</div>

        <div class="flex align-middle">
            <div class="px-2">
                <a class="text-xl text-white hover:shadow-sm social facebook" href="#" title="social links"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="px-2">
                <a class="text-xl text-white hover:shadow-sm social twitter" href="#" title="social links"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="px-2">
                <a class="text-xl text-white hover:shadow-sm social linkedin" href="#" title="social links"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="px-2">
                <a class="text-xl text-white hover:shadow-sm social instagram" href="#" title="social links"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>

    <main>
        <section class="py-5">
            <div class="uppercase text-2xl font-bold text-center">Instant Search Keywords</div>
        </section>
        <section class="flex">
            <div class="w-2/12 px-2" title="ads">
                <div class="bg-teal-50 py-5 px-8 rounded-2xl flex justify-center">
                    <img src="./image/ads.png" alt="ads" />
                </div>
            </div>

            <div class="w-full px-2 search-container" title="Search Main">
                <div class="bg-teal-50 py-10 px-4 rounded-2xl">
                    <div class="px-10">
                        <div class="py-10 px-12 flex justify-center">
                            <div class="w-full">
                                <div class="bg-white py-3 px-6 rounded-full flex align-middle shadow-md">
                                    <input class="w-full outline-none border-none" type="search" name="search" id="search" title="search" placeholder="Search" />
                                    <i class="fas fa-search text-teal-400 pl-6"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid -->
                    <div class="py-4 px-2 hidden">
                        <div class="bg-white rounded-xl py-4 px-6">
                            <div class="text-xl font-medium mb-2"></div>
                            <hr />
                            <div class="py-4">
                                <div class="py-2">
                                    <a href="" target="_blank"><i class="fas fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2" id="grid"></div>


                    <div class="flex justify-center max-w-4xl mx-auto pt-12">
                        <div class="mt-10 text-center">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia
                            eligendi rem provident vel, itaque nulla quaerat ex quos in
                            aliquam delectus impedit, quas ut, totam magnam illo non
                            quisquam recusandae.
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-2/12 px-2" title="ads">
                <div class="bg-teal-50 py-5 px-8 rounded-2xl flex justify-center">
                    <img src="./image/ads.png" alt="ads" />
                </div>
            </div>
        </section>
    </main>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script async src="./js/app.js"></script>
    <script async src="./js/form.js"></script>
    <script async src="./js/form2.js"></script>
</body>

</html>