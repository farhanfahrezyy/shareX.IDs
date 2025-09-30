        <!-- Mobile Overlay -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>
        
        <aside class="w-72 lg:w-64 bg-white shadow-lg fixed inset-y-0 left-0 lg:relative z-50 overflow-y-auto transform transition-transform duration-300 ease-in-out lg:translate-x-0 -translate-x-full" id="sidebar">
            <div class="p-6 bg-gradient-to-r from-green-500 to-green-700">
                <div class="flex items-center justify-between">
                    <a href="?page=waiting-list" class="flex items-center space-x-3 text-white">
                        <img src="../logo.png" alt="ShareX.ID" class="w-8 h-8">
                        <span class="text-xl font-bold">ShareX.ID Admin</span>
                    </a>
                    <!-- Mobile close button -->
                    <button id="sidebar-close" class="lg:hidden p-2 text-white hover:text-gray-200 hover:bg-white/20 rounded-lg transition-colors">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
            </div>
            
            <nav class="mt-6 px-4">
                <div class="space-y-2">
                    <div class="mb-4">
                        <button onclick="toggleSection('customer')" class="w-full flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-users text-gray-500 w-5"></i>
                                <span class="font-medium">Customer</span>
                            </div>
                            <i id="customer-arrow" class="fas fa-chevron-right text-gray-400 transition-transform text-sm"></i>
                        </button>
                        <div id="customer-menu" class="ml-6 mt-2 space-y-1 hidden">
                            <a href="?page=pre-order" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Pre Order
                            </a>
                            <a href="?page=renew" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Renew
                            </a>
                            <a href="?page=waiting-list" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Waiting List
                            </a>
                            <a href="?page=aktif" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Aktif
                            </a>
                            <a href="?page=cancelled" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Cancelled
                            </a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <button onclick="toggleSection('groups')" class="w-full flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-layer-group text-gray-500 w-5"></i>
                                <span class="font-medium">Groups & Accounts</span>
                            </div>
                            <i id="groups-arrow" class="fas fa-chevron-right text-gray-400 transition-transform text-sm"></i>
                        </button>
                        <div id="groups-menu" class="ml-6 mt-2 space-y-1 hidden">
                            <a href="?page=groups" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Groups
                            </a>
                            <a href="?page=expired-account" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Expired Account
                            </a>
                            <a href="?page=expired-3-days" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Expired in 3 Days
                            </a>
                            <a href="?page=expired-7-days" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Expired in 7 Days
                            </a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <button onclick="toggleSection('provider')" class="w-full flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-building text-gray-500 w-5"></i>
                                <span class="font-medium">Provider</span>
                            </div>
                            <i id="provider-arrow" class="fas fa-chevron-right text-gray-400 transition-transform text-sm"></i>
                        </button>
                        <div id="provider-menu" class="ml-6 mt-2 space-y-1 hidden">
                            <a href="?page=kategori-provider" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Kategori Provider
                            </a>
                            <a href="?page=provider" class="block px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                                <i class="fas fa-circle text-xs mr-2"></i>Provider
                            </a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <a href="?page=employee" class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg transition-colors">
                            <i class="fas fa-user-tie text-gray-500 w-5"></i>
                            <span class="font-medium">Employee</span>
                        </a>
                    </div>

                    <div class="mt-8">
                        <a href="#" class="flex items-center space-x-3 px-3 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                            <i class="fas fa-sign-out-alt text-red-500 w-5"></i>
                            <span class="font-medium">Logout</span>
                        </a>
                    </div>
                </div>
            </nav>
        </aside>


