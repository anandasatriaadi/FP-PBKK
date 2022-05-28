<x-layouts.dashboard :title="__('Add a New Menu')">
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="w-full">
                <div class="shadow-lg rounded-2xl p-4 bg-white w-full">
                    @csrf
                    <form>
                        <div class="relative pb-4 w-full md:w-1/2">
                            <label for="required-menu-name" class="text-gray-700">
                                Menu Name
                                <span class="text-red-500 required-dot">
                                    *
                                </span>
                            </label>
                            <input type="text" id="required-menu-name" name="menu-name" placeholder="Sup Konro" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 focus:bg-white transition ease-in-out duration-200 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent"/>
                        </div>
                        <div class="relative pb-4 w-full md:w-1/2">                            
                            <label class="text-gray-700" for="required-menu-description">
                                Description
                                <span class="text-red-500 required-dot">
                                    *
                                </span>
                            </label>
                            <textarea id="required-menu-description" placeholder="Enter your description" name="menu-description" rows="5" cols="40" class="border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 focus:bg-white transition ease-in-out duration-200 text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent"></textarea>
                        </div>
                        <div class="relative pb-4 w-full md:w-1/2">
                            <label for="required-menu-price" class="text-gray-700">
                                Price
                                <span class="text-red-500 required-dot">
                                    *
                                </span>
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 top-0 bottom-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-700 sm:text-sm">
                                        Rp
                                    </span>
                                </div>
                                <input type="number" name="menu-price" id="required-menu-price" class="focus:ring-sky-500 border-l border-b border-t border-transparent bg-gray-50 text-gray-700 placeholder-gray-400 focus:bg-white transition ease-in-out duration-200 py-2 px-4 focus:border-sky-500 block w-full pl-9 sm:text-sm rounded-md" placeholder="0,00"/>
                            </div>
                        </div>
                        <div class="relative pb-4 w-full md:w-1/2">
                            <label for="required-menu-image" class="text-gray-700">
                                Menu Image
                                <span class="text-red-500 required-dot">
                                    *
                                </span>
                                <div class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 focus:bg-white transition ease-in-out duration-200 text-gray-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                                    <input type="file" id="required-menu-image" name="menu-image" placeholder="Sup Konro" class="hidden"/>
                                    Select Image
                                </div>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>