<!-- Barra lateral -->
<aside class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l bg-gradient-to-r from-cyan-800 to-cyan-500">
    <!-- Logo -->
    <div class="flex">
        <!-- Logo -->
        <div class="shrink-0 flex items-center w-full">
            <a href="{{ route('dashboard') }}" class="flex h-16 mx-auto">
                <x-application-logo class="block h-9 w-auto fill-white stroke-white text-gray-800" />
            </a>
        </div>
    </div>
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-6 ">
            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Categoria</label>

                <a class="flex items-center px-2 py-1 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('category.create') }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                        </g><g id="SVGRepo_iconCarrier"> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 12.75V18H12.75V12.75H18V11.25H12.75V6H11.25V11.25H6V12.75H11.25Z" fill="#080341"></path> </g>
                    </svg>
                    <span class="mx-2 text-sm font-medium">Agregar</span>
                </a>

                <a class="flex items-center px-2 py-1 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('category.index') }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 11.25H16.5V12.75H10.5V11.25Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 7.5H16.5V9H10.5V7.5Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 15H16.5V16.5H10.5V15Z" fill="#080341"></path> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 7.5H9V9H7.5V7.5Z" fill="#080341"></path> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 11.25H9V12.75H7.5V11.25Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 15H9V16.5H7.5V15Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 4.5L4.5 3.75H19.5L20.25 4.5V19.5L19.5 20.25H4.5L3.75 19.5V4.5ZM5.25 5.25V18.75H18.75V5.25H5.25Z" fill="#080341"></path> </g>
                    </svg>
                    <span class="mx-2 text-sm font-medium">Lista</span>
                </a>
            </div>

            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Productos</label>

                <a class="flex items-center px-2 py-1 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('product.create') }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                        </g><g id="SVGRepo_iconCarrier"> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 12.75V18H12.75V12.75H18V11.25H12.75V6H11.25V11.25H6V12.75H11.25Z" fill="#080341"></path> </g>
                    </svg>
                    <span class="mx-2 text-sm font-medium">Agregar</span>
                </a>

                <a class="flex items-center px-2 py-1 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('product.index') }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 11.25H16.5V12.75H10.5V11.25Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 7.5H16.5V9H10.5V7.5Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 15H16.5V16.5H10.5V15Z" fill="#080341"></path> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 7.5H9V9H7.5V7.5Z" fill="#080341"></path> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 11.25H9V12.75H7.5V11.25Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 15H9V16.5H7.5V15Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 4.5L4.5 3.75H19.5L20.25 4.5V19.5L19.5 20.25H4.5L3.75 19.5V4.5ZM5.25 5.25V18.75H18.75V5.25H5.25Z" fill="#080341"></path> </g>
                    </svg>
                    <span class="mx-2 text-sm font-medium">Lista</span>
                </a>

            </div>

            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Libro diario</label>

                <a class="flex items-center px-2 py-1 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('daylybook.create') }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                        </g><g id="SVGRepo_iconCarrier"> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 12.75V18H12.75V12.75H18V11.25H12.75V6H11.25V11.25H6V12.75H11.25Z" fill="#080341"></path> </g>
                    </svg>
                    <span class="mx-2 text-sm font-medium">Agregar</span>
                </a>

                <a class="flex items-center px-2 py-1 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('daylybook.index') }}">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 11.25H16.5V12.75H10.5V11.25Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 7.5H16.5V9H10.5V7.5Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 15H16.5V16.5H10.5V15Z" fill="#080341"></path> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 7.5H9V9H7.5V7.5Z" fill="#080341"></path> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 11.25H9V12.75H7.5V11.25Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 15H9V16.5H7.5V15Z" fill="#080341"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 4.5L4.5 3.75H19.5L20.25 4.5V19.5L19.5 20.25H4.5L3.75 19.5V4.5ZM5.25 5.25V18.75H18.75V5.25H5.25Z" fill="#080341"></path> </g>
                    </svg>
                    <span class="mx-2 text-sm font-medium">Lista</span>
                </a>
            </div>
        </nav>
    </div>
</aside>