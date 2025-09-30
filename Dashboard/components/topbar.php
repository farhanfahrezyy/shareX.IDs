<?php
// Set default biar gak error
$breadcrumb = $breadcrumb ?? 'Dashboard';
$title = $title ?? $breadcrumb;
?>
<header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40 w-full">
  <div class="px-4 sm:px-6 lg:px-8 py-3 sm:py-4">
    <div class="flex items-center justify-between w-full">
      <!-- Mobile menu button + Title -->
      <div class="flex items-center space-x-3 sm:space-x-4 min-w-0 flex-1">
        <button id="sidebar-toggle" class="text-gray-500 hover:text-gray-700 lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors flex-shrink-0">
          <i class="fas fa-bars text-lg"></i>
        </button>
        <div class="flex flex-col min-w-0 flex-1">
          <h1 class="text-base sm:text-lg font-semibold text-gray-900 truncate">
            <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
          </h1>
          <span class="text-xs sm:text-sm text-gray-500 truncate">
            <?= htmlspecialchars($breadcrumb, ENT_QUOTES, 'UTF-8'); ?>
          </span>
        </div>
      </div>

      <!-- Search + User Menu -->
      <div class="flex items-center space-x-2 sm:space-x-4 flex-shrink-0">
        <!-- Search - Hidden on small screens, visible on medium+ -->
        <div class="relative hidden md:block">
          <input 
            type="text" 
            placeholder="Cari Order..." 
            class="w-48 lg:w-64 border border-gray-300 rounded-lg pl-3 pr-10 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
          >
          <i class="fas fa-search absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
        </div>

        <!-- Mobile Search Button -->
        <button class="md:hidden p-2 text-gray-500 hover:text-gray-700 rounded-lg hover:bg-gray-100 transition-colors">
          <i class="fas fa-search text-lg"></i>
        </button>

        <!-- User Menu -->
        <div class="relative group">
          <button class="flex items-center space-x-2 focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition-colors">
            <img src="https://i.pravatar.cc/40" alt="User" class="w-8 h-8 rounded-full flex-shrink-0">
            <span class="hidden sm:inline text-sm font-medium text-gray-700">Admin</span>
            <i class="fas fa-chevron-down text-gray-400 text-xs hidden sm:block"></i>
          </button>
          <!-- Dropdown -->
          <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2 hidden group-hover:block z-50">
            <a href="?page=profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">
              <i class="fas fa-user mr-2"></i> Profile
            </a>
            <a href="?page=settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors">
              <i class="fas fa-cog mr-2"></i> Settings
            </a>
            <div class="border-t my-1"></div>
            <a href="?page=logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
              <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
