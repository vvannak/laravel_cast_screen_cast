<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anny Tailor</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bg-blue-900 text-white">
        <div class="nav-side shadow bg-white absolute py-4" style="min-width: 300px;min-height: -webkit-fill-available;display:none">
            <div class="border-b px-4">
                <button class="w-full bg-blue-600 h-10 hover:bg-blue-800 mb-4">Create Account</button>
                <div class="text-gray-900 mb-4">Already have account? <span><a class="text-blue-600" href="#">Sign in</a></span></div>
            </div>
            <div class="text-black">
                <ul class="border-b py-4">
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2"><i class="fa fa-desktop fa-md"></i></span>
                            <h1 class="text-md">TV</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2"><i class="fa fa-camera-retro fa-md"></i></span>
                            <h1 class="text-md">Cookbook</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2"><i class="fa fa-star-o fa-md"></i></span>
                            <h1 class="text-md">Branch</h1>
                        </a>
                    </li>
                </ul>
                <ul class="border-b py-4">
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2">
                                <div class="w-6 h-4 bg-green-500"></div>
                            </span>
                            <h1 class="text-md">លីថល FASHION</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2">
                                <div class="w-6 h-4 bg-blue-500"></div>
                            </span>
                            <h1 class="text-md">សម្ភារៈផ្ទះ</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2">
                                <div class="w-6 h-4 bg-teal-500"></div>
                            </span>
                            <h1 class="text-md">សម្រស់សុខភាព</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2">
                                <div class="w-6 h-4 bg-red-500"></div>
                            </span>
                            <h1 class="text-md">ក្មេង & ទារក</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2">
                                <div class="w-6 h-4 bg-teal-500"></div>
                            </span>
                            <h1 class="text-md">សម្រស់សុខភាព</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2">
                                <div class="w-6 h-4 bg-teal-500"></div>
                            </span>
                            <h1 class="text-md">សម្រស់សុខភាព</h1>
                        </a>
                    </li>
                    <li class="py-2 hover:bg-blue-800 px-4">
                        <a class="flex text-gray-900 hover:text-white items-center" href="#">
                            <span class="mr-2">
                                <div class="w-6 h-4 bg-teal-500"></div>
                            </span>
                            <h1 class="text-md">សម្រស់សុខភាព</h1>
                        </a>
                    </li>
                </ul>
                <ul class="flex px-10 py-4 justify-between">
                    <li class="items-center">
                        <div class="bg-gray-600 w-12 h-12 rounded-full"></div>
                    </li>
                    <li class="items-center">
                        <div class="bg-gray-600 w-12 h-12 rounded-full"></div>
                    </li>
                    <li class="items-center">
                        <div class="bg-gray-600 w-12 h-12 rounded-full"></div>
                    </li>
                </ul>
            </div>
        </div>
        <header class="container mx-auto pt-4">
            <div class="nav">
                <ul class="flex justify-between items-center py-2">
                    <li class="px-5">
                        <i class=" f-medium fa fa-navicon fa-lg"></i>
                    </li>
                    <li class="w-1/5 font-bold text-xl">
                        ANNY TAILIR
                    </li>
                    <li class="w-1/2 flex items-center relative">
                        <select class="h-10 bg-gray-400 px-2 text-black" name="" id="">
                            <option value="" selected>Keyword</option>
                            <option value="">Code</option>
                        </select>
                        <input class=" h-10 w-full text-black px-4 py-2"  type="text" name="" id="">
                        <button class=" bg-blue-500 border-red-blue-500 h-10 px-4 rounded-r"><i class=" fa fa-search"></i></button>
                    </li>
                    <li class="text-3xl">
                        <div class="relative flex">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </li>
                    <li>
                        <a class="" href="#"><img class="w-8" src="images/kh.svg" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="menu">
                <ul class="flex">
                    <li class="py-2 px-5 hover:bg-blue-700 flex items-center justify-center"><a class="mr-2" href="#">Department</a><i class="fa fa-angle-down"></i></li>
                    <li class="px-5 py-2 hover:bg-blue-700">Branch</li>
                    <li class="px-5 py-2 hover:bg-blue-700">Lookbook</li>
                    <li class="px-5 py-2 hover:bg-blue-700">LittlTV</li>
                    <li class="py-2 px-5 hover:bg-blue-700">Merchant</li>
                </ul>
            </div>
        </header>{{-- end header --}}
    </div>
    <div class="content container mx-auto py-4">
        <h1 class="text-lg font-bold mb-4">WOMAM | SEE ALL</h1> 
        <div class="flex mb-8">
            <div class="pr-3">
                <img class="mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/img1.jpg" alt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/img1.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/img1.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/img1.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/img1.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/img1.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/img1.jpg" alt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
        </div>
        {{-- selected fashtion brach --}}
        <div class="items-center text-center">
            <h1 class="text-2xl uppercase">selected fashtion brands</h1>
            <div class="flex text-center justify-center">
                <img class="w-40" src="images/b1.png" alt="">
                <img class="w-40" src="images/b2.png" alt="">
                <img class="w-40" src="images/b3.jpg" alt="">
                <img class="w-40" src="images/b4.png" alt="">
                <img class="w-40" src="images/b5.jpg" alt="">
            </div>
        </div>
        {{-- ACCESSORIES | SEE ALL --}}
        <div class="content container mx-auto py-4">
            <h1 class="text-lg font-bold mb-4">MAN | SEE ALL</h1> 
            <div class="flex mb-8">
                <div class="pr-3">
                    <img class="mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/man.jpg" alt="">
                    <div>
                        <div class="text-gray-700">Fashion Women Bag</div>
                        <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                        <div class="text-gray-700">TRE381192</div>
                    </div>
                </div>
                <div class="pr-3">
                    <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/man.jpg" a hover:shadow-2xl lt="">
                    <div>
                        <div class="text-gray-700">Fashion Women Bag</div>
                        <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                        <div class="text-gray-700">TRE381192</div>
                    </div>
                </div>
                <div class="pr-3">
                    <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/man.jpg" a hover:shadow-2xl lt="">
                    <div>
                        <div class="text-gray-700">Fashion Women Bag</div>
                        <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                        <div class="text-gray-700">TRE381192</div>
                    </div>
                </div>
                <div class="pr-3">
                    <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/man.jpg" a hover:shadow-2xl lt="">
                    <div>
                        <div class="text-gray-700">Fashion Women Bag</div>
                        <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                        <div class="text-gray-700">TRE381192</div>
                    </div>
                </div>
                <div class="pr-3">
                    <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/man.jpg" a hover:shadow-2xl lt="">
                    <div>
                        <div class="text-gray-700">Fashion Women Bag</div>
                        <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                        <div class="text-gray-700">TRE381192</div>
                    </div>
                </div>
                <div class="pr-3">
                    <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/man.jpg" a hover:shadow-2xl lt="">
                    <div>
                        <div class="text-gray-700">Fashion Women Bag</div>
                        <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                        <div class="text-gray-700">TRE381192</div>
                    </div>
                </div>
                <div class="pr-3">
                    <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/man.jpg" alt="">
                    <div>
                        <div class="text-gray-700">Fashion Women Bag</div>
                        <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                        <div class="text-gray-700">TRE381192</div>
                    </div>
                </div>
            </div>
    </div>
    <div class="content container mx-auto py-4">
        <h1 class="text-lg font-bold mb-4">ACCESSORIES | SEE ALL</h1> 
        <div class="flex mb-8">
            <div class="pr-3">
                <img class="mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/accessary.jpg" alt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/accessary.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/accessary.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/accessary.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/accessary.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/accessary.jpg" a hover:shadow-2xl lt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
            <div class="pr-3">
                <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/accessary.jpg" alt="">
                <div>
                    <div class="text-gray-700">Fashion Women Bag</div>
                    <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                    <div class="text-gray-700">TRE381192</div>
                </div>
            </div>
        </div>
</div>
<div class="content container mx-auto py-4">
    <h1 class="text-lg font-bold mb-4">baby & HEALTH | SEE ALL</h1> 
    <div class="flex mb-8">
        <div class="pr-3">
            <img class="mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/beauty.jpg" alt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/beauty.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/beauty.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/beauty.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/beauty.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/beauty.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/beauty.jpg" alt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
    </div>
</div>
<div class="content container mx-auto py-4">
    <h1 class="text-lg font-bold mb-4">BABY, KID & TOY | SEE ALL</h1> 
    <div class="flex mb-8">
        <div class="pr-3">
            <img class="mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/baby.jpg" alt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/baby.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/baby.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/baby.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/baby.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/baby.jpg" a hover:shadow-2xl lt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
        <div class="pr-3">
            <img class=" hover:shadow-2xl mb-4 hover:shadow-lg transition delay-150 duration-200 ease-in-out" src="/images/baby.jpg" alt="">
            <div>
                <div class="text-gray-700">Fashion Women Bag</div>
                <div class="text-gray-700"><span class="line-through">$14.00</span>&nbsp;&nbsp;<span class="font-bold text-red-900">$9.80</span></div>
                <div class="text-gray-700">TRE381192</div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- E-PAYMENTS & BANKS --}}
<div class="bg-gray-400 py-10">
    <div class="container mx-auto">
        <h1 class="font-bold text-2xl text-center mb-6">E-PAYMENTS & BANKS</h1>
        <div class="flex justify-between px-10 mb-4">
            <a href="#"><img src="images/p1.png" alt=""></a>
            <a href="#"><img src="images/p2.png" alt=""></a>
            <a href="#"><img src="images/p3.png" alt=""></a>
            <a href="#"><img src="images/p4.png" alt=""></a>
            <a href="#"><img src="images/p5.png" alt=""></a>
            <a href="#"><img src="images/p5.png" alt=""></a>
            <a href="#"><img src="images/p7.png" alt=""></a>
            <a href="#"><img src="images/p8.png" alt=""></a>
        </div>
        <div class="text-center mb-4">DOWNLOAD ANNY TAILOR</div>
        <center style="display: block;text-align: -webkit-center;">
            <div class="flex justify-center">
                <div>
                    <img class="h-16" src="images/app1.png" alt="">
                </div>
                <span>&nbsp;</span>
                <div>
                    <img class="h-16" src="images/app2.png" alt="">
                </div>
            </div>
        </center>
    </div>
</div>
    <footer class="container mx-auto">
        <div class="grid grid-cols-3 bg-text-400 py-10 mb-10  border-b">
            <div>
                <h1 class="text-lg uppercase mb-4">Customer</h1>
                <ul>
                    <li class="py-2"><a href="#">Hoteline</a></li>
                    <li class="py-2"><a href="#">How to order</a></li>
                    <li class="py-2"><a href="#">Delivery</a></li>
                    <li class="py-2"><a href="#">Return</a></li>
                    <li class="py-2"><a href="#">Size guide</a></li>
                    <li class="py-2"><a href="#">Color guide</a></li>
                </ul>
            </div>
            <div>
                <h1 class="text-lg uppercase mb-4">ABOUT L192.COM</h1>
                <ul>
                    <li class="py-2"><a href="#">About Us</a></li>
                    <li class="py-2"><a href="#">Terms & Conditions</a></li>
                    <li class="py-2"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div>
                <h1 class="text-lg uppercase mb-4">MEET US ON</h1>
                <ul>
                    <li class="py-2"><a href="#">Facebook</a></li>
                    <li class="py-2"><a href="#">Instagram</a></li>
                    <li class="py-2"><a href="#">YouTube</a></li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-2 bg-text-400">
            <div class="text-sm">
                <div>Any questions? Let us help you.</div>
                <div>HOTLINE: 016955505</div>
               
            </div>
            <div class="">
                <ul class="flex text-sm justify-end">
                    <li class="py-2"><a href="#">About Us</a></li>
                    <li class="py-2"><a href="#">| Terms & Conditions</a></li>
                    <li class="py-2"><a href="#">| Privacy Policy </a></li>
                </ul>
                <div class="flex text-sm justify-end">@2010, 2017 L192.COM</div>
            </div>
        </div>
        <div class="grid grid-cols-2 bg-text-400 py-6">
            <div class="text-sm">Page generated in 0.1050 seconds with 13 database query.</div>
        </div>
    </footer>

</body>
</html>
