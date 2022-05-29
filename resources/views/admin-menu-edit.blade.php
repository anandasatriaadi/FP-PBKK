<x-layouts.dashboard :title="__('Edit Menu')">
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="w-full">
                <div class="flex shadow-lg rounded-2xl p-4 bg-white w-full">
                    <form method="POST" class="w-full md:w-1/2" action="{{ route('adminEditMenuUpdate', ['id' => $menu->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="relative pb-4">
                            <label for="required-menu-name" class="text-gray-700">
                                Menu Name
                                <span class="text-red-500 required-dot">
                                    *
                                </span>
                            </label>
                            <input type="text" id="required-menu-name" value="{{ $menu->name }}" name="name" placeholder="Sup Konro" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 focus:bg-white transition ease-in-out duration-200 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent"/>
                        </div>
                        <div class="relative pb-4">                            
                            <label class="text-gray-700" for="required-menu-description">
                                Description
                                <span class="text-red-500 required-dot">
                                    *
                                </span>
                            </label>
                            <textarea id="required-menu-description" placeholder="Enter your description" name="description" rows="5" cols="40" class="border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 focus:bg-white transition ease-in-out duration-200 text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">{{ $menu->description }}</textarea>
                        </div>
                        <div class="relative pb-4">
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
                                <input type="number" id="required-menu-price" value="{{ $menu->price }}" placeholder="0,00" name="price" class="focus:ring-sky-500 border-l border-b border-t border-transparent bg-gray-50 text-gray-700 placeholder-gray-400 focus:bg-white transition ease-in-out duration-200 py-2 px-4 focus:border-sky-500 block w-full pl-9 sm:text-sm rounded-md"/>
                            </div>
                        </div>
                        <div class="relative pb-4">
                            <label for="required-menu-image" class="text-gray-700">
                                Menu Image
                                <span class="text-red-500 required-dot">
                                    *
                                </span>
                                <div class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 focus:bg-white transition ease-in-out duration-200 text-gray-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                                    <input type="file" id="required-menu-image" name="image" placeholder="Sup Konro" class="hidden"/>
                                    Select Image
                                </div>
                            </label>
                        </div>
                        <div class="flex">
                            <button type="submit" class="mt-4 py-2 px-4 w-full bg-sky-600 hover:bg-sky-700 focus:ring-sky-500 focus:ring-offset-sky-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                                Submit
                            </button>
                        </div>
                    </form>
                    
                    <div class="md:pl-6  w-full md:w-1/2">
                        <div class="mb-6">
                            <div class="font-semibold">
                                Previous Image
                            </div>
                            <div class="md:w-4/6">
                                <div class="font-bold bg-gray-200 rounded-md bg-cover bg-center relative" style="padding-top: 60%; background-image: url('/images/{{ $menu->image }}')">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="font-semibold">
                                Uploaded Image
                            </div>
                            <div class="md:w-4/6">
                                <div class="font-bold bg-gray-200 rounded-md bg-cover bg-center relative" style="padding-top: 60%;">
                                    <img class="absolute top-0 right-0 bottom-0 left-0" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>