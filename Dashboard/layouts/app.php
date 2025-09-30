<?php include __DIR__ . '/../partials/head.php'; ?>
<?php
// Optional section for per-page <head> additions
section('head');
?>
<body>
    <div class="flex min-h-screen bg-gradient-to-br from-slate-50 to-indigo-50 overflow-x-hidden">
<?php include __DIR__ . '/../partials/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-0 ml-0 w-full max-w-full">
            <!-- Topbar will be included by the calling file -->

            <!-- Content Area -->
            <main class="flex-1 overflow-y-auto pt-16 lg:pt-0 overflow-x-hidden" data-content>
                <div class="p-4 lg:p-6 w-full max-w-full">
<?php echo isset($content) ? $content : ''; ?>
                </div>
            </main>
        </div>
    </div>

    <!-- Modals -->
<?php include __DIR__ . '/../components/modal.html'; ?>

    <!-- Notification Container -->
    <div id="notification-container" class="fixed top-4 right-4 z-50"></div>

<?php include __DIR__ . '/../partials/scripts.php'; ?>
<?php
// Optional per-page scripts
section('scripts');
?>
</body>
</html>


