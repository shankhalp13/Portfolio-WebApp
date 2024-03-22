@extends('layout')
@section('title','My Place')
@section('content')

<div class="sm:pb-0 pb-[20rem]">
    <div class="pt-[0rem] ">
        <div id="default-carousel" class="relative w-full " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[20rem] overflow-hidden rounded-lg md:h-[30rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/carousel1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/carousel2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/carousel3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/carousel4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-2/3 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/carousel5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <div class=" w-full font-mono h-full ">
        <div class=" sm:text-2xl text-lg md:text-4xl p-10 font-bold flex justify-center items-center text-center">
            <h1 class >DARJEELING</h1>
        </div>
        <div class="px-10 text-justify">
            <p class="arrow-bullet pb-5">Darjeeling is a city in the northernmost region of the Indian state of West Bengal. Located in the Eastern Himalayas, it has an average elevation of 2,045 metres (6,709 ft). To the west of Darjeeling lies the easternmost province of Nepal, to the east the Kingdom of Bhutan, to the north the Indian state of Sikkim, and farther north the Tibet Autonomous Region region of China. Bangladesh lies to the south and southeast, and most of the state of West Bengal lies to the south and southwest, connected to the Darjeeling region by a narrow tract. Kangchenjunga, the world's third-highest mountain, rises to the north and is prominently visible on clear days.</p>
            <p class="arrow-bullet pb-5" >In the early 19th century, during East India Company rule in India, Darjeeling was identified as a potential summer retreat for British officials, soldiers and their families. The narrow mountain ridge was leased from the Kingdom of Sikkim, and eventually annexed to British India. Experimentation with growing tea on the slopes below Darjeeling was highly successful. Thousands of labourers were recruited chiefly from Nepal to clear the forests, build European-style cottages and work in the tea plantations. The widespread deforestation displaced the indigenous peoples. Residential schools were established in and around Darjeeling for the education of children of the domiciled British in India. By the late-19th century, a novel narrow-gauge mountain railway, the Darjeeling Himalayan Railway, was bringing summer residents into the town and carrying a freight of tea out for export to the world. After India's independence in 1947, as the British left Darjeeling, its cottages were purchased by wealthy Indians from the plains and its tea plantations by out-of-town Indian business owners and conglomerates.</p>
            <p class="arrow-bullet pb-5">Darjeeling's population today is constituted largely of the descendants of the indigenous and immigrant labourers that were employed in the original development of the town. Although their common language, the Nepali language, has been given official recognition at the state and federal levels in India, the recognition has created little meaningful employment for the language's speakers nor has it increased their ability to have a significantly greater say in their political affairs. The tea industry and tourism are the mainstays of the town's economy. Deforestation in the region after India's independence has caused environmental damage, affecting the perennial springs that supply the town's water. The population of Darjeeling meanwhile has exploded over the years, and unregulated construction, traffic congestion and water shortages are common. Many young locals, educated in government schools, have taken to migrating out for the lack of jobs matching their skills. Like out-migrants from other regions of northeastern India, they have been subjected to discrimination and racism in some Indian cities.</p>
            <p class="arrow-bullet pb-5">Darjeeling's culture is highly cosmopolitan—a result of diverse ethnic groups intermixing and evolving away from their historical roots. The region's indigenous cuisine is rich in fermented foods and beverages. Tourists have flocked to Darjeeling since the mid-19th century. In 1999, after an international campaign for its support, the Darjeeling Himalayan Railway was declared a World Heritage Site by UNESCO. In 2005, Darjeeling tea was given geographical indication by the World Trade Organization as much for the protection of the brand as for the development of the region that produces it.</p>
        </div>
    </div>
</div>

@endsection('content')
