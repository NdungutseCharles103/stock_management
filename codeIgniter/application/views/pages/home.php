        <div class="flex h-[90vh] w-full overflow-y-auto">
            <div class="flex w-full h-[130vh] shadow-2xl flex-col items-center mx-auto pt-6 px-6 max-w-[1100px]">
                <div class="flex w-full flex-col items-center justify-between">
                    <div class="flex flex-col items-center">
                        <i class="bx bxs-user-circle text-[5em]"></i>
                        <div class="flex flex-col">
                            <p class="text-2xl flex items-center mb-0 font-bold">
                                <?php
                                echo $name;
                                ?>
                            </p>
                            <p class="text-sm opacity-90"><?php
                                                            echo $email;
                                                            ?></p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a class="py-1 btn btn-primary px-3 bg-blue-500 text-white rounded-md text-lg " href="/products/addproduct">
                            <i class="bx bx-plus"></i> Add New Product</a>
                        <a class="py-1 ml-3 btn btn-primary px-3 bg-blue-500 text-white rounded-md text-lg " href="/products/printproducts">
                            Print your products</a>
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <h2 class="font-semibold text-2xl mt-4 text-center">Statistics</h2>
                    <div class="grid text-white w-full grid-cols-2 homegrid gap-[10%] sm:grid-cols-3 mt-3">
                        <div class="bg-primary aspect-[5/4] p-3 rounded-xl items-center justify-center">
                            <div class="flex flex-col items-center justify-center h-full w-full">
                                <p class="text-xl text-center">Products Added</p>
                                <p class="text-3xl text-center"><?php
                                                                echo $NoProducts[0]['p_sum'];
                                                                ?></p>
                            </div>
                        </div>
                        <div class="bg-success aspect-[5/4] p-3 rounded-xl items-center justify-center">
                            <div class="flex flex-col items-center justify-center h-full w-full">
                                <p class="text-xl text-center">Total Income</p>
                                <p class="text-3xl text-center"><?php
                                                                echo $Income[0]['s_sum'];
                                                                ?></p>
                                <p>RWF</p>
                            </div>
                        </div>
                        <div class="bg-warning aspect-[5/4] p-3 rounded-xl items-center justify-center">
                            <div class="flex flex-col items-center justify-center h-full w-full">
                                <p class="text-xl text-center">Products Sold</p>
                                <p class="text-3xl text-center"><?php
                                                                echo $NoSold[0]['c_sold'];
                                                                ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="font-semibold text-2xl mt-4 text-center">Product supplying curve</h2>
                        <div id="Chart" class="h-[50vh] w-full items-center justify-center">
                            <canvas id="myChart" class="max-w-[700px] w-[30%] min-w[280px] mx-auto max-h-full"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/chart.js"></script>
