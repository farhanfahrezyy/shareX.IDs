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
        <button id="sidebar-toggle" class="text-gray-600 hover:text-gray-800 lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors flex-shrink-0 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2" aria-label="Toggle sidebar menu">
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

      <!-- User Info (tanpa dropdown & foto random) -->
      <div class="flex items-center flex-shrink-0">
        <span class="text-sm font-medium text-gray-700">Admin</span>
      </div>
    </div>
  </div>
</header>
