<?php
   $main='A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants 
   (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to affect reproduction, usually by providing a mechanism for the union of sperm with eggs. Flowers may facilitate outcrossing (fusion of sperm and eggs from different individuals in a population) resulting from cross pollination or allow selfing (fusion of sperm and egg from the same flower) when self pollination occurs. Some flowers produce diaspores without fertilization (parthenocarpy). Flowers contain sporangia and are the site where gametophytes develop. Many flowers have evolved to be attractive to animals, so as to cause them to be vectors
    for the transfer of pollen. After fertilization, the ovary of the flower develops into fruit containing seeds.';
    $block = 'Lorem ipsum dolor sit amet consectetur adidkjdf  dklfjd dfj dfuoik jklsfuoilj';
    $company = 'PSD WEB Hosting';
    $companyDetails = 'We provide multi-function web services like website hosting, web app hosting, game streaming and many more..';
?>
<!DOCTYPE html>
<head>
    <title>task-php</title>
    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body class="overflow-x-hidden mx-4 " > 
    <header class="pt-8 text-blue-700  xl:flex-row md:justify-between  ">
        <div class="flex justify-between">
            <div class="text-3xl font-bold px-1">
                <img class="h-10 w-10 inline" src="image/cixware.png" alt="">
                <?php echo $company; ?>
            </div>
            <div class="text-xl font-bold px-2 ">
                <button class="border-2 border-gray-600 hover:bg-red-600 hover:text-white"><span class="px-2 py-2">EN</span></button>
                <button class="border-2 border-gray-600 hover:bg-red-600 hover:text-white"><span class="px-2 py-2">FR</span></button>
                <button class="border-2 border-gray-600 hover:bg-red-600 hover:text-white"><span class="px-2 py-2">CH</span></button>
                <button class="border-2 border-gray-600 hover:bg-red-600 hover:text-white"><span class="px-2 py-2">IN</span></button>
            </div>
        </div>
        <div>
            <p class="text-right text-gray-800 ">
                <a href="#" class="hover:text-red-700 hover:underline">How it works? </a>
                <a href="#" class="hover:text-red-700 hover:underline">E-draw max</a>
                <a href="#" class="hover:text-red-700 hover:underline">E-draw Mind Map</a>
            </p>
        </div>
        <div class="flex flex-col-reverse bg-blue-700 text-white lg:flex-row md:justify-between px-3 py-2 border-red-800 shadow-outline">
            <div class="flex flex-col pr-48 text-justify  md:flex-row  text-gray">
                <a class="ml-2  py-1 mt-1 px-1 font-bold hover:text-red-700 hover:underline" href="#">Home</a>
                <a class="ml-2  py-1 mt-1 px-1 font-bold hover:text-red-700 hover:underline" href="#">Products</a>
                <a class="ml-2  py-1 mt-1 px-1 font-bold hover:text-red-700 hover:underline  " href="#">Download</a>
                <a class="ml-2  py-1 mt-1 px-1 font-bold hover:text-red-700 hover:underline" href="#">Buy Now</a>
                <a class="ml-2  py-1 mt-1 px-1 font-bold font-bold  hover:text-red-700 hover:underline" href="#"> Support</a>
                <a class="ml-2  py-1 mt-1 px-1 font-bold font-bold  hover:text-red-700 hover:underline" href="#"> About</a>
            </div>
            <div>
                <i class="fas fa-search absolute mt-2 ml-3 text-blue-700  "></i><input  class="pl-10   h-8  overflow-hidden w-full md:w-auto text-red-800"  placeholder="Search"  type="text" >
            </div>
        </div>
    </header>
    <div class="bg-center bg-no-repeat bg-cover " style="background-image:url('./image/web-hosting.jpg')">
        <div class="w-full h-screen opacity-75 bg-gray-600 leading-none">
            <div class="flex flex-col w-4/5  m-0 m-auto h-full items-center text-center">
                <div class="mt-32">
                    <button class="bg-orange-600 p-4 rounded-full border-4 border-white"><img class="h-16 w-16 rounded" src="./image/github.png" alt="logo"></button>
                </div>
                <div>
                    <p class="font-semibold  text-3xl sm:text-4xl md:text-5xl">
                       <?php echo $company; ?>
                    </p>
                </div>
                <div>
                    <p class="font-semibold  text-2xl md:text-2xl">
                        <?php echo $companyDetails; ?>
                    </p>
                </div>
                <div class="mt-5">
                    <button class="bg-gray-400 text-black my-2 border-2 rounded-full text-xl py-1 px-8 hover:bg-red-600  hover:text-white mx-4">know more</button>
                    <button class="bg-gray-400 text-black border-2 mb-2 rounded-full text-xl py-1 px-8 hover:bg-red-900 hover:text-white mx-4">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        <div class="flex flex-col mt-10 w-4/5">
            <div class="bg-center h-10 bg-no-repeat bg-cover w-full" style="background-image:url('https://picsum.photos/1000/700')">
                <p class="text-center font-bold text-2xl text-white">
                    Top story headline
                </p>
            </div>
            <div class="border-2 px-4 py-2">
                <div class="flex flex-col lg:flex-row lg:justify-between"> 
                    <img class="w-64" src="image/sibu.jpg" alt="">
                    <div class="mx-8 text-justify">
                        <?php
                            echo $main;
                        ?>
                        <br>
                        <button class="border-2 bg-blue-700  rounded-full p-2 mx-5 text-white" type="submit">Download</button>
                        <button  class="border-2 bg-blue-700 rounded-full mx-5 p-2 text-white" type="submit">Purchase</button>
                    </div> 
                </div>
            </div>
            <div class="bg-center h-10 bg-no-repeat bg-cover w-full mt-10" style="background-image:url('https://picsum.photos/1000/700')">
                <p class="text-center font-bold text-2xl text-white">
                    A monthly newspaper by different authors
                </p>
            </div>
            <div class="border-2 px-4 py-2">
                <div class="flex justify-between">
                    <div>
                        <div class="w-48 px-5 mx-2">
                            <img src="image/sibu.jpg" alt="">
                        </div>
                        <div class="w-64 mt-4">
                            <?php
                            echo $block;
                            ?>
                        </div>
                    </div>
                    <div>
                        <div class="w-48 px-5 mx-2">
                            <img src="image/sibu.jpg" alt="">
                        </div>
                        <div class="w-64 mt-4">
                            <?php
                            echo $block;
                            ?>
                        </div>
                    </div>
                    <div>
                        <div class="w-48 px-5 mx-2">
                            <img src="image/sibu.jpg" alt="">
                        </div>
                        <div class="w-64 mt-4">
                            <?php
                            echo $block;
                            ?>
                        </div>
                    </div>
                    <div>
                        <div class="w-48 px-5 mx-2">
                            <img src="image/sibu.jpg" alt="">
                        </div>
                        <div class="w-64 mt-4">
                            <?php
                            echo $block;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <?php
                    echo $main;
                ?>
            </div>
        </div>
        <div class="w-1/5 absolute top-0 right-0" >
            <div class="mb-10 border-2 p-4 ">
                <h1 class="bg-blue-700 text-white text-center">Social</h1>
                <img   src="image/sibu.jpg" alt="">
                <div class="flex justify-center">
                <button class="border-2 mt-4 align-center  text-center bg-blue-700 mr-4rounded-full p-2 text-white" type="submit">Share and Links</button>
                </div>
            </div>
            <div class="border-2 p-4">
                <div class="bg-blue-700 text-white  text-center">Navigate</div>
                    <div>
                        <ul>
                            <?php
                                $a=0;
                                while($a<8){
                                    echo "<li>";
                                    echo "<a class=\"hover:text-red-700 hover:underline\" href=\"#\">items</a>";
                                    echo "</li>";
                                    $a++;
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="bg-center h-10 bg-no-repeat bg-cover w-full mt-10" style="background-image:url('https://picsum.photos/1000/700')">
            
    </div>
    <div class="mx-0 mx-auto w-2/3 bg-gray-400 shadow-2xl px-64 mt-2">
        <div class="flex justify-between">
            <a class="px-3 mx-2 hover:underline hover:text-red-700" href="#">Home</a>
            <a class="px-3 mx-2 hover:underline hover:text-red-700" href="">Products</a>
            <a class="px-3 mx-2 hover:underline hover:text-red-700" href="">Privacy</a>
            <a class="px-3 mx-2 hover:underline hover:text-red-700" href="">Terms</a>
            <a class="px-3 mx-2 hover:underline hover:text-red-700" href="">Maps</a>
            <a class="px-3 mx-2 hover:underline hover:text-red-700" href="">links</a>
        </div>
    </div>
   
    
    <footer class="mx-auto bg-blue-400">
        <p class="text-center text-xs text-bold mt-2 mb-4  ">
            Copyright company &copy;2020. All Right Reserved.
        </p>
    </footer>
</body>
</html>