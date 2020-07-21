<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anny Tailor</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <style>
        .worksans {
            font-family: 'Work Sans', sans-serif;
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    @include('partials.nav-header')
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full max-w-6xl min-w-0 mx-auto px-6">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
				Account Setting
			</a>
              </div>
            </nav>
            <div class="w-full max-w-6xl min-w-0 mx-auto px-6">
			<div class="flex mt-12 bg-white rounded-md">
				<div class="w-64 bg-red-100 rounded-l-md border-r border-dashed border-red-200">
					<div class="flex justify-center items-center h-32 text-red-700 text-center font-semibold text-3xl italic">
						Logo
					</div>
					<div class="mt-8 border-t border-red-200">
						<a href="#" class="block py-3 px-6 text-red-700 font-semibold border-b border-red-200">
							Facebook
						</a>
						<a href="#" class="block py-3 px-6 bg-red-900 text-red-100 font-semibold border-b border-red-200">
							Google
						</a>
						<a href="#" class="block py-3 px-6 text-red-700 font-semibold border-b border-red-200">
							Microsoft
						</a>
						<a href="#" class="block py-3 px-6 text-red-700 font-semibold border-b border-red-200">
							Yahoo
						</a>
						<a href="#" class="block py-3 px-6 text-red-700 font-semibold border-b border-red-200">
							Apple
						</a>
						<a href="#" class="block py-3 px-6 text-red-700 font-semibold border-b border-red-200">
							Amazon
						</a>
						<a href="#" class="block py-3 px-6 text-red-700 font-semibold border-b border-red-200">
							Twitter
						</a>
					</div>
				</div>
				<div class="flex-grow">
					<div class="flex flex-col mx-40 mt-20">
						<div class="flex items-center mb-4">
							<label for="email" class="w-24 font-semibold text-gray-700">Email</label>
							<input type="email" class="flex-grow border border-red-200 rounded py-1 px-3" placeholder="Email" />
						</div>
						<div class="flex items-center mb-4">
							<label for="username" class="w-24 font-semibold text-gray-700">Username</label>
							<input type="text" class="flex-grow border border-red-200 rounded py-1 px-3" placeholder="Username" />
						</div>
						<div class="flex items-center mb-4">
							<label for="password" class="w-24 font-semibold text-gray-700">Password</label>
							<input type="password" class="flex-grow border border-red-200 rounded py-1 px-3" placeholder="Password" />
						</div>
						<div class="flex items-center mb-4">
							<textarea name="description" class="flex-grow border border-red-200 rounded py-1 px-3" id="description" rows="8"></textarea>
						</div>
						<div class="flex items-center mb-4">
							<button class="py-1 px-4 bg-red-800 text-red-100 font-semibold hover:bg-red-900 hover:shadow border border-red-200 rounded mr-2">Submit</button>
							<button class="py-1 px-4 bg-white text-red-700 font-semibold hover:shadow border border-red-200 rounded">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>

    </section>

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social</h3>
                        <ul class="list-reset items-center pt-3">
                            <li>
                                <a class="inline-block no-underline hover:text-black hover:underline py-1" href="#">Add social links</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
