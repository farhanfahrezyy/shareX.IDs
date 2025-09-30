<?php
// --- 1) Inisialisasi variabel penting ---
$contentFile = null; // biar gak undefined
$breadcrumb   = 'Dashboard';
$title        = 'Dashboard';

// --- 2) Load config route/breadcrumb ---
$config = include __DIR__ . '/config/pages.php';
$routes = $config['routes'] ?? [];
$breadcrumbs = $config['breadcrumbs'] ?? [];

// --- 3) Resolve halaman aktif ---
$page = isset($_GET['page']) ? trim($_GET['page']) : 'waiting-list';
$breadcrumb = $breadcrumbs[$page] ?? 'Dashboard';
$title = $_GET['title'] ?? $breadcrumb;

// --- 4) Tentukan file konten yang akan dimuat ---
$fallbackPhp  = __DIR__ . '/pages/' . $page . '.php';
$fallbackHtml = __DIR__ . '/pages/' . $page . '.html';

if (file_exists($fallbackPhp)) {
    $contentFile = $fallbackPhp;
} elseif (file_exists($fallbackHtml)) {
    $contentFile = $fallbackHtml;
} elseif (isset($routes[$page])) {
    $contentFile = dirname(__DIR__) . '/' . ltrim($routes[$page], '/');
}

// --- 5) Render Layout ---
require_once __DIR__ . '/components/header.php';
?>

    <div class="flex min-h-screen bg-gradient-to-br from-slate-50 to-indigo-50 overflow-x-hidden">
        <!-- Sidebar -->
        <?php require_once __DIR__ . '/components/sidebar.php'; ?>

        <!-- Main -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-64 w-full max-w-full">
            <?php require_once __DIR__ . '/components/topbar.php'; ?>

            <main class="flex-1 overflow-y-auto pt-16 lg:pt-0 overflow-x-hidden">
                <div class="p-4 lg:p-6 w-full max-w-full">
                    <?php
                    if (!empty($contentFile) && file_exists($contentFile)) {
                        include $contentFile;
                    } else {
                        include __DIR__ . '/components/not-found.php';
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>

    <!-- Include JavaScript -->
    <script src="assets/js/main.js"></script>

<?php require_once __DIR__ . '/components/footer.php'; ?>
