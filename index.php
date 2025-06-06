<?php include 'header-main.php'; ?>

<script defer src="assets/js/apexcharts.js"></script>
<div x-data="Job Vacancies">
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>All In One Placement</span>
        </li>
    </ul>

    <div class="pt-5">
      

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
            <!-- JOB VACANCIES -->
            <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">JOB VACANCIES</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                           
                        </a>
                       
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> 5 </div>
                    
                </div>
                <div class="flex items-center font-semibold mt-5">
                   
                
                </div>
            </div>

            <!-- UPCOMING INTERVIEW -->
            <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">UPCOMING INTERVIEW</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            
                        </a>
                       
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> 0 </div>
                    
                </div>
                <div class="flex items-center font-semibold mt-5">
                  
                </div>
            </div>

            <!-- REGISTERED CANDIDATES -->
            <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">REGISTERED CANDIDATES</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                           
                        </a>
                        
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> 6 </div>
                    
                </div>
                <div class="flex items-center font-semibold mt-5">
                  
                    
                </div>
            </div>

            <!--PENDING FEEDBACKS -->
            <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">PENDING FEEDBACKS</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            
                        </a>
                       
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> 15 </div>
                    
                </div>
                <div class="flex items-center font-semibold mt-5">
                   
                </div>
            </div>
        </div>
        

        <div class="grid lg:grid-cols-1 grid-cols-3 gap-6 mb-6">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">List of all Task Added</h5>
                </div>
                
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="ltr:rounded-l-md rtl:rounded-r-md">Employee</th>
                                <th>Tasks</th>
                                <th>Task Time & date </th>
                                <th>Description </th>
                                <th>Status </th>
                                <th>Remark </th>

                                <th class="ltr:rounded-r-md rtl:rounded-l-md">Completed By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="min-w-[150px] text-black dark:text-white">
                                    <div class="flex items-center">
                                        <img class="w-8 h-8 rounded-md ltr:mr-3 rtl:ml-3 object-cover" src="/assets/images/profile-6.jpeg" alt="avatar" />
                                        <span class="whitespace-nowrap">Darshana</span>
                                    </div>
                                </td>
                                <td class="text-primary">Testing</td>
                                <td><a href="/apps/invoice/preview.php">10:56pm/28.12.23</a></td>
                                <td>Calling</td>
                                
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Completed</span></td>
                                <td>Not Answering</td>
                                <td>Darshana</td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">

                                    <div class="flex items-center">
                                        <img class="w-8 h-8 rounded-md ltr:mr-3 rtl:ml-3 object-cover" src="/assets/images/profile-7.jpeg" alt="avatar" />
                                        <span class="whitespace-nowrap">Suresh</span>
                                    </div>
                                </td>
                                <td class="text-info">Urgent Call</td>
                                <td><a href="/apps/invoice/preview.php">04:05pm/28.12.23</a></td>
                                <td>This is testing</td>
                                <td><span class="badge bg-secondary shadow-md dark:group-hover:bg-transparent">Pending</span></td>
                                <td>Not Answering</td>
                                <td>Darshana</td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">
                                    <div class="flex items-center">
                                        <img class="w-8 h-8 rounded-md ltr:mr-3 rtl:ml-3 object-cover" src="/assets/images/profile-8.jpeg" alt="avatar" />
                                        <span class="whitespace-nowrap">Dipali</span>
                                    </div>
                                </td>
                                <td class="text-warning">Call to KOSO</td>
                                <td><a href="/apps/invoice/preview.php">03:48pm/28.12.23</a></td>
                                <td>Calling</td>
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Completed</span></td>
                                <td>Not Answering</td>
                                <td>Darshana</td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">
                                    <div class="flex items-center">
                                        <img class="w-8 h-8 rounded-md ltr:mr-3 rtl:ml-3 object-cover" src="/assets/images/profile-9.jpeg" alt="avatar" />
                                        <span class="whitespace-nowrap">Kamini</span>
                                    </div>
                                </td>
                                <td class="text-danger">Testing</td>
                                <td><a href="/apps/invoice/preview.php">05:00pm/28.12.23</a></td>
                                <td>Testing</td>
                                <td><span class="badge bg-secondary shadow-md dark:group-hover:bg-transparent">Pending</span></td>
                                <td>Not Answering</td>
                                <td>Darshana</td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">
                                    <div class="flex items-center">
                                        <img class="w-8 h-8 rounded-md ltr:mr-3 rtl:ml-3 object-cover" src="/assets/images/profile-10.jpeg" alt="avatar" />
                                        <span class="whitespace-nowrap">Kamini</span>
                                    </div>
                                </td>
                                <td class="text-secondary">Call</td>
                                <td><a href="/apps/invoice/preview.php">01:00pm/28.12.23</a></td>
                                <td>Testing</td>
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Completed</span></td>
                                <td>Not Answering</td>
                                <td>Darshana</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="grid lg:grid-cols-1 grid-cols-2 mb-6 gap-6">
            <div class="panel h-full sm:col-span-2 xl:col-span-1 pb-0">
            
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">List of all my task </h5>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr class="border-b-0">
                                <th class="ltr:rounded-l-md rtl:rounded-r-md">Task</th>
                                <th>Task time&date</th>
                                <th>Discription</th>
                                <th>Remark</th>
                                <th class="ltr:rounded-r-md rtl:rounded-l-md">Status</th>
                                <th>Assigned To</th>
                                <th>Completed By</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="min-w-[150px] text-black dark:text-white">
                                        <p class="whitespace-nowrap">Urgent Call <span class="text-primary block text-xs"></span></p>
                                    </div>
                                </td>
                                <td>12:00pm/28.12.23</td>
                                <td>Calling</td>
                                <td>Not Answering</td>
                                <td>
                                    <a class="text-danger flex items-center" href="javascript:;">
                                        <svg class="w-3.5 h-3.5 rtl:rotate-180 ltr:mr-1 rtl:ml-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.5" d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>

                                        Pending
                                    </a>
                                </td>
                                <td>Darshana</td>
                                <td>Darshana</td>
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">View</span></td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">
                                   
                                        <p class="whitespace-nowrap">Testing <span class="text-warning block text-xs"></span></p>
                                    </div>
                                </td>
                                <td>01:00pm/26.12.23</td>
                                <td>Calling</td>
                                <td>Not Answering</td>
                                <td>
                                    <a class="text-success flex items-center" href="javascript:;">
                                        <svg class="w-3.5 h-3.5 rtl:rotate-180 ltr:mr-1 rtl:ml-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.5" d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        Completed
                                    </a>
                                </td>
                                <td>Darshana</td>
                                <td>Darshana</td>
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">View</span></td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">
                                  
                                        <p class="whitespace-nowrap">Urgent Call<span class="text-danger block text-xs"></span></p>
                                    </div>
                                </td>
                                <td>02:00pm/25.12.23</td>
                                <td>Calling</td>
                                <td>Not Answering</td>
                                <td>
                                    <a class="text-warning flex items-center" href="javascript:;">
                                        <svg class="w-3.5 h-3.5 rtl:rotate-180 ltr:mr-1 rtl:ml-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.5" d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        Processing
                                    </a>
                                </td>
                                <td>Darshana</td>
                                <td>Darshana</td>
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">View</span></td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">
                                    
                                        <p class="whitespace-nowrap">Urgent Call <span class="text-primary block text-xs"></span></p>
                                    </div>
                                </td>
                                <td>03:23pm/27.12.23</td>
                                <td>Calling</td>
                                <td>Not Answering</td>
                                <td>
                                    <a class="text-secondary flex items-center" href="javascript:;">
                                        <svg class="w-3.5 h-3.5 rtl:rotate-180 ltr:mr-1 rtl:ml-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.5" d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        Completed
                                    </a>
                                </td>
                                <td>Darshana</td>
                                <td>Darshana</td>
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">View</span></td>
                            </tr>
                            <tr class="text-white-dark hover:text-black dark:hover:text-white-light/90 group">
                                <td class="text-black dark:text-white">
                        
                                        <p class="whitespace-nowrap">Testing<span class="text-primary block text-xs"></span></p>
                                    </div>
                                </td>
                                <td>04.23pm/29.12.23</td>
                                <td>Calling</td>
                                <td>Not Answering</td>
                                <td>
                                    <a class="text-primary flex items-center" href="javascript:;">
                                        <svg class="w-3.5 h-3.5 rtl:rotate-180 ltr:mr-1 rtl:ml-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.5" d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        Completed
                                    </a>
                                </td>
                                <td>Darshana</td>
                                <td>Darshana</td>
                                <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">View</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("sales", () => ({
            init() {
                isDark = this.$store.app.theme === "dark" || this.$store.app.isDarkMode ? true : false;
                isRtl = this.$store.app.rtlClass === "rtl" ? true : false;

                const revenueChart = null;
                const salesByCategory = null;
                const dailySales = null;
                const totalOrders = null;

                // revenue
                setTimeout(() => {
                    this.revenueChart = new ApexCharts(this.$refs.revenueChart, this.revenueChartOptions)
                    this.$refs.revenueChart.innerHTML = "";
                    this.revenueChart.render()

                    // sales by category
                    this.salesByCategory = new ApexCharts(this.$refs.salesByCategory, this.salesByCategoryOptions)
                    this.$refs.salesByCategory.innerHTML = "";
                    this.salesByCategory.render()

                    // daily sales
                    this.dailySales = new ApexCharts(this.$refs.dailySales, this.dailySalesOptions)
                    this.$refs.dailySales.innerHTML = "";
                    this.dailySales.render()

                    // total orders
                    this.totalOrders = new ApexCharts(this.$refs.totalOrders, this.totalOrdersOptions)
                    this.$refs.totalOrders.innerHTML = "";
                    this.totalOrders.render()
                }, 300);

                this.$watch('$store.app.theme', () => {
                    isDark = this.$store.app.theme === "dark" || this.$store.app.isDarkMode ? true : false;

                    this.revenueChart.updateOptions(this.revenueChartOptions);
                    this.salesByCategory.updateOptions(this.salesByCategoryOptions);
                    this.dailySales.updateOptions(this.dailySalesOptions);
                    this.totalOrders.updateOptions(this.totalOrdersOptions);
                });

                this.$watch('$store.app.rtlClass', () => {
                    isRtl = this.$store.app.rtlClass === "rtl" ? true : false;
                    this.revenueChart.updateOptions(this.revenueChartOptions);
                });

            },

            // revenue
            get revenueChartOptions() {
                return {
                    series: [{
                            name: 'Income',
                            data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000]
                        },
                        {
                            name: 'Expenses',
                            data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000]
                        }
                    ],
                    chart: {
                        height: 325,
                        type: "area",
                        fontFamily: 'Nunito, sans-serif',
                        zoom: {
                            enabled: false
                        },
                        toolbar: {
                            show: false
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        curve: 'smooth',
                        width: 2,
                        lineCap: 'square'
                    },
                    dropShadow: {
                        enabled: true,
                        opacity: 0.2,
                        blur: 10,
                        left: -7,
                        top: 22
                    },
                    colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                    markers: {
                        discrete: [{
                                seriesIndex: 0,
                                dataPointIndex: 6,
                                fillColor: '#1b55e2',
                                strokeColor: 'transparent',
                                size: 7
                            },
                            {
                                seriesIndex: 1,
                                dataPointIndex: 5,
                                fillColor: '#e7515a',
                                strokeColor: 'transparent',
                                size: 7
                            },
                        ],
                    },
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    xaxis: {
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        },
                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: isRtl ? 2 : 0,
                            offsetY: 5,
                            style: {
                                fontSize: '12px',
                                cssClass: 'apexcharts-xaxis-title'
                            }
                        },
                    },
                    yaxis: {
                        tickAmount: 7,
                        labels: {
                            formatter: (value) => {
                                return value / 1000 + 'K';
                            },
                            offsetX: isRtl ? -30 : -10,
                            offsetY: 0,
                            style: {
                                fontSize: '12px',
                                cssClass: 'apexcharts-yaxis-title'
                            },
                        },
                        opposite: isRtl ? true : false,
                    },
                    grid: {
                        borderColor: isDark ? '#191e3a' : '#e0e6ed',
                        strokeDashArray: 5,
                        xaxis: {
                            lines: {
                                show: true
                            }
                        },
                        yaxis: {
                            lines: {
                                show: false
                            }
                        },
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        }
                    },
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right',
                        fontSize: '16px',
                        markers: {
                            width: 10,
                            height: 10,
                            offsetX: -2,
                        },
                        itemMargin: {
                            horizontal: 10,
                            vertical: 5
                        },
                    },
                    tooltip: {
                        marker: {
                            show: true
                        },
                        x: {
                            show: false
                        }
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: !1,
                            opacityFrom: isDark ? 0.19 : 0.28,
                            opacityTo: 0.05,
                            stops: isDark ? [100, 100] : [45, 100],
                        },
                    },
                }
            },

            // sales by category
            get salesByCategoryOptions() {
                return {
                    series: [985, 737, 270],
                    chart: {
                        type: 'donut',
                        height: 460,
                        fontFamily: 'Nunito, sans-serif',
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 25,
                        colors: isDark ? '#0e1726' : '#fff'
                    },
                    colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f', '#5c1ac3', '#e7515a'],
                    legend: {
                        position: 'bottom',
                        horizontalAlign: 'center',
                        fontSize: '14px',
                        markers: {
                            width: 10,
                            height: 10,
                            offsetX: -2,
                        },
                        height: 50,
                        offsetY: 20,
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '65%',
                                background: 'transparent',
                                labels: {
                                    show: true,
                                    name: {
                                        show: true,
                                        fontSize: '29px',
                                        offsetY: -10
                                    },
                                    value: {
                                        show: true,
                                        fontSize: '26px',
                                        color: isDark ? '#bfc9d4' : undefined,
                                        offsetY: 16,
                                        formatter: (val) => {
                                            return val;
                                        },
                                    },
                                    total: {
                                        show: true,
                                        label: 'Total',
                                        color: '#888ea8',
                                        fontSize: '29px',
                                        formatter: (w) => {
                                            return w.globals.seriesTotals.reduce(function(a, b) {
                                                return a + b;
                                            }, 0);
                                        },
                                    },
                                },
                            },
                        },
                    },
                    labels: ['Apparel', 'Sports', 'Others'],
                    states: {
                        hover: {
                            filter: {
                                type: 'none',
                                value: 0.15,
                            }
                        },
                        active: {
                            filter: {
                                type: 'none',
                                value: 0.15,
                            }
                        },
                    }
                }
            },

            // daily sales
            get dailySalesOptions() {
                return {
                    series: [{
                            name: 'Sales',
                            data: [44, 55, 41, 67, 22, 43, 21]
                        },
                        {
                            name: 'Last Week',
                            data: [13, 23, 20, 8, 13, 27, 33]
                        },
                    ],
                    chart: {
                        height: 160,
                        type: 'bar',
                        fontFamily: 'Nunito, sans-serif',
                        toolbar: {
                            show: false
                        },
                        stacked: true,
                        stackType: '100%'
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 1
                    },
                    colors: ['#e2a03f', '#e0e6ed'],
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            legend: {
                                position: 'bottom',
                                offsetX: -10,
                                offsetY: 0
                            }
                        }
                    }],
                    xaxis: {
                        labels: {
                            show: false
                        },
                        categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
                    },
                    yaxis: {
                        show: false
                    },
                    fill: {
                        opacity: 1
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '25%'
                        }
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        show: false,
                        xaxis: {
                            lines: {
                                show: false
                            }
                        },
                        padding: {
                            top: 10,
                            right: -20,
                            bottom: -20,
                            left: -20
                        },
                    },
                }
            },

            // total orders
            get totalOrdersOptions() {
                return {
                    series: [{
                        name: 'Sales',
                        data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
                    }],
                    chart: {
                        height: 290,
                        type: "area",
                        fontFamily: 'Nunito, sans-serif',
                        sparkline: {
                            enabled: true
                        }
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2
                    },
                    colors: isDark ? ['#00ab55'] : ['#00ab55'],
                    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                    yaxis: {
                        min: 0,
                        show: false
                    },
                    grid: {
                        padding: {
                            top: 125,
                            right: 0,
                            bottom: 0,
                            left: 0
                        }
                    },
                    fill: {
                        opacity: 1,
                        type: 'gradient',
                        gradient: {
                            type: 'vertical',
                            shadeIntensity: 1,
                            inverseColors: !1,
                            opacityFrom: 0.3,
                            opacityTo: 0.05,
                            stops: [100, 100],
                        },
                    },
                    tooltip: {
                        x: {
                            show: false
                        },
                    },
                }
            }
        }));
    });
</script>
<?php include 'footer-main.php'; ?>
