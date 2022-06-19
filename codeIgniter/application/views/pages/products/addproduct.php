<?php
    echo form_open('products/addproduct');
?>
        <div class="flex w-full flex-col h-full items-center justify-center">
            <div class="flex items-center flex-col p-4 w-[400px] min-w-[280px] ">
                <h2 class="text-2xl font-semibold text-blue-500 text-center">Enter your new product in store</h2>
                <div class="flex flex-wrap text-red-400"><?php echo validation_errors(); ?></div>
                <div class="flex flex-col w-full mt-6">
                    <label for="name" class="font-semibold">Product Name</label>
                    <input type="text" placeholder="enter product name" name="name" id="name" class="w-full border-[2px]
                  rounded-lg h-[40px] mt-3 px-3 outline-none text-lg border-slate-800 focus:border-blue-400">
                </div>
                <div class="flex flex-col w-full mt-6">
                    <label for="text" class="font-semibold">product quantity</label>
                    <input type="text" placeholder="enter product quantity" name="quantity" id="password" class="w-full border-[2px]
                  rounded-lg h-[40px] mt-3 px-3 outline-none text-lg border-slate-800 focus:border-blue-400">
                </div>
                <div class="flex flex-col w-full mt-6">
                    <label for="text" class="font-semibold">product price</label>
                    <input type="text" placeholder="enter product price" name="price" id="password" class="w-full border-[2px]
                  rounded-lg h-[40px] mt-3 px-3 outline-none text-lg border-slate-800 focus:border-blue-400">
                </div>
                <div class="flex  w-full mt-6 justify-between items-center">
                    <label for="text" class="font-semibold">Product Type</label>
                    <select class="ml-3 w-1/2 bg-blue-400 outline-none p-2 text-white" name="type" id="">
                        <option value="">Select type</option>
                        <option value="food">Food</option>
                        <option value="drink">Drink</option>
                        <option value="equipment">Equipment</option>
                        <option value="equipment">Electronic devices</option>
                        <option value="equipment">Others</option>
                    </select>
                </div>
                <input name="submit" class="bg-blue-500 px-4 py-2 mx-auto w-full 
             cursor-pointer text-white rounded-lg mt-6" type="submit" value="Add Product">
            </div>
        </div>
    </div>

    <?php
    echo form_close();
    ?>