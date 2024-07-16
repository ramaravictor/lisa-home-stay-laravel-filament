<div class="flex flex-col items-center justify-center p-6 text-white bg-center bg-cover main-container lg:items-end lg:pr-48 lg:py-12"
    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url(&quot;https://cf.bstatic.com/xdata/images/hotel/max1280x900/490034721.jpg?k=12d5f748565a0fd718e95cf1d69c1e29d9f431949672629467bcc00a7c8a9883&o=&hp=1&quot;);">
    <div class="flex flex-col mt-5 lg:mt-12"><text class="text-xs tracking-wider">CHECK AVAILABILITY</text><text
            class="mt-2 text-xl tracking-wider md:text-2xl font-playfair">Come as you are and we will take care of the
            rest</text>
        <div class="w-24 h-0.5 bg-white mt-8"></div>
        <form class="flex flex-col mt-8">
            <div class="flex flex-col md:flex-row md:space-x-8">
                <div class="flex flex-col flex-1">
                    <text>Check In</text>
                    <input placeholder="Check In" name="check_in" type="date"
                        class="w-full px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary date">
                </div>
                <div class="flex flex-col flex-1">
                    <text>Check Out</text>
                    <input placeholder="Check Out" name="check_out" type="date"
                        class="w-full px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary date">
                </div>
            </div>
            <div class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-8">
                <div class="flex flex-col flex-1"><text>Select Accommodation</text><select name="accommodation"
                        class="px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-select placeholder:text-white focus:ring-secondary focus:border-secondary">
                        <option value="" class="text-black">Select Accommodation</option>
                        <option value="1 Bedroom Private Pool" class="text-black">1 Bedroom Private Pool</option>
                        <option value="2 Bedroom Private Pool" class="text-black">2 Bedroom Private Pool</option>
                    </select></div>
                <div class="flex flex-col flex-1 mt-4 md:mt-0"><text>Guest</text><input name="guest" min="1"
                        class="px-4 py-2 mt-1 text-white bg-transparent border border-white rounded-lg form-input placeholder:text-gray-100 focus:ring-secondary focus:border-secondary"
                        placeholder="Guest" type="number" value=""></div>
            </div>
            <button type="submit"
                class="px-5 py-3 my-6 text-sm font-medium text-black bg-white rounded-lg hover:bg-slate-900 hover:text-white focus:ring-4 focus:ring-slate-950 md:my-10">CHECK
                AVAILABILITY</button>
        </form>
    </div>
</div>
