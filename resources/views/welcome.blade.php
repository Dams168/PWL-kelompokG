<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kas</title>

        @vite('resources/css/app.css')

        <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    </head>
    <body>
    <!-- sidebar -->
    <div id="sidebar-section" class="h-screen fixed">
        <div id="sidebar" class="fixed h-screen top-0 left-0 bg-slate-800 w-20 hover:w-72 duration-200">

            <nav role="navigation" class="pl-4 pt-8 mt-4">
                <div class="mt-4 relative overflow-hidden">
                    <h1 class="name text-white fixed top-0 text-lg">Admin</h1>

                    <ul class="nas-list" id="nav-list">
                        <li class="nav-item text-xl  p-2 rounded-l-xl text-white hover:bg-white hover:text-blue-800">
                            <a href="#dashboard" class="flex gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item text-xl p-2 rounded-l-xl text-white hover:bg-white hover:text-blue-800">
                            <a href="#pemasukan" class="flex gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                Pemasukan
                            </a>
                        </li>

                        <li class="nav-item text-xl p-2 rounded-l-xl text-white hover:bg-white hover:text-blue-800">
                            <a href="#pengeluaran" class="flex gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                Pengeluaran
                            </a>
                        </li>

                        <li class="nav-item text-xl p-2 rounded-l-xl text-white hover:bg-white hover:text-blue-800">
                            <a href="#laporan" class="flex gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                Laporan
                            </a>
                        </li>

                        <li class="nav-item text-xl p-2 rounded-l-xl text-white hover:bg-white hover:text-blue-800">
                            <a href="#laporan" class="flex gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                User
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

        </div>
    </div>

    <div id="content" class="md:ml-20">
        <div id="dashboard" class=" h-screen">
            <h1 class="m-auto text-4xl">Dashboard</h1>
        </div>

        <div id="pemasukan" class=" h-screen  ">
            <h1 class="m-auto text-4xl">Pemasukan</h1>
        </div>

        <div id="pengeluaran" class=" h-screen  ">
            <h1 class="m-auto text-4xl">Pengeluaran</h1>
        </div>

        <div id="laporan" class=" h-screen  ">
            <h1 class="m-auto text-4xl">Laporan</h1>
        </div>

        <div id="user" class=" h-screen  ">
            <h1 class="m-auto text-4xl">User</h1>
        </div>
    </div>
    <script src="main.js"></script>
    </body>
</html>
