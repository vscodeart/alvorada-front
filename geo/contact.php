<?php include "header.php" ?>



<div class="bg-stone-100 pb-20">
    <div class="w-full max-w-7xl mx-auto">


        <div class="grid lg:grid-cols-4 grid-cols-1 pt-20 gap-6 ">
            <div class="h-[111px] border border-[#705140] rounded-lg lg:mx-0 mx-10">
                <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                    <div class="flex  justify-center items-center font-bold text-2xl font-Contractica">ტელეფონი</div>
                    <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">+995 599 33 00 00</div>
                </div>
            </div>
            <div class="h-[111px]  border border-stone-800 rounded-lg lg:mx-0 mx-10">
                <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                    <div class="flex  justify-center items-center font-bold text-2xl font-Contractica ">ელ-ფოსტა</div>
                    <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">talk@alvorada.ge</div>
                </div>
            </div>
            <div class="h-[111px]  border border-stone-800 rounded-lg lg:mx-0 mx-10">
                <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                    <div class="flex  justify-center items-center font-semibold text-2xl font-Contractica">მისამართი</div>
                    <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">სიმონ კანდელაკის 59, თბილისი</div>
                </div>
            </div>
            <div class="h-[111px]  border border-stone-800 rounded-lg lg:mx-0 mx-10">
                <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                    <div class="flex  justify-center items-center font-bold text-2xl font-Contractica">სამუშაო საათები</div>
                    <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">ორ-კვ, 10:00 - 20:00</div>
                </div>
            </div>

        </div>





        <div class="border border-[#705140] rounded-lg border-opacity-30  items-center mt-20 lg:mx-0 mx-10">
            <div class="grid grid-cols-2 mt-10  grid-rows-1 gap-4">
                <div class="pl-7 text-3xl font-bold font-Cirka">ლოკაცია</div>
                <div class="flex justify-end pr-7"><button class="bg-[#8FB0AE] text-white font-bold py-2 px-8 rounded-lg border border-[#FFFFFF]">Open Map</button></div>
            </div>
            <div class="h-[280px] mb-5 pt-5 px-5">
                <iframe class=" rounded-lg" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvxsdaas" src="https://maps.google.com/maps?width=444&amp;height=311&amp;hl=en&amp;q=0179,+39a+ზაქარია+ფალიაშვილის+ქუჩა,+თბილისი+0179/@41.7089548,44.7660993,17z%20+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>







            <div class=" lg:flex lg:justify-beetwen mt-20">
                <div class="grid w-full lg:grid-cols-[35%_65%] lg:grid-rows-1  ">

                    <div class="w-full flex justify-center">
                        <img src="images/ok.png">
                    </div>

                    <div class="lg:mx-0 mx-10 lg:ml-10 lg:px-0 px-5 bg-[#E5E2CC] border-[#705140] border border-opacity-30 lg:flex  lg:justify-center rounded-lg bg-opacity-30 lg:mt-0 mt-20">
                        <div class="mt-10 text-2xl text-left lg:text-1xl font-bold text-center font-Contractica">
                            <p class="mb-6">დაგვიკავშირდით დამატებითი ინფორმაციისთვის</p>
                            <div class="mt-5 pr-2 pl-2">
                                <input class="w-full bg-transparent bg-white h-12 placeholder:text-black font-normal text-slate-700 text-base  rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="სახელი" />
                            </div>
                            <div class="grid lg:grid-cols-2 gap-3 lg:gap-5 mt-3 pr-2 pl-2">
                                <div>
                                    <input class="w-full bg-transparent bg-white h-12 placeholder:text-black font-normal text-slate-700 text-base  rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="ტელეფონი" />
                                </div>
                                <div>
                                    <input class="w-full bg-transparent bg-white h-12 placeholder:text-black font-normal text-slate-700 text-base  rounded-md px-3  transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="სერვისი" />
                                </div>
                            </div>
                            <div class=" lg:mt-5 mt-4 pr-2 pl-2">
                                <input class="w-full bg-transparent  bg-white  placeholder:text-black font-normal placeholder: text-up  text-slate-700 text-base  rounded-md px-3 pb-24 pt-4   transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="შეტყობინება" />
                            </div>
                            <div class="flex justify-end mt-8">
                                <button type="button" class="font-Montserrat text-white  bg-[#8FB0AE] border border-white font-medium rounded-lg text-sm px-12 py-2 text-center me-2 mb-6">გაგზავნა</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







    </div>
</div>








<?php include "footer.php" ?>
