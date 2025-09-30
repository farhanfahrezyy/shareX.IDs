            <footer class="border-t bg-white/80 backdrop-blur">
                <div class="max-w-7xl mx-auto px-4 py-3 text-sm text-gray-500">
                    ShareX.ID Admin Dashboard
                </div>
            </footer>
        </div>
    </div>

    <script>
        function toggleSection(section) {
            const menu = document.getElementById(section + '-menu');
            const arrow = document.getElementById(section + '-arrow');
            if (!menu || !arrow) return;
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                arrow.style.transform = 'rotate(90deg)';
            } else {
                menu.classList.add('hidden');
                arrow.style.transform = 'rotate(0deg)';
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('sidebar-toggle');
            
            console.log('Sidebar element:', sidebar);
            console.log('Toggle button:', toggleBtn);
            
            // Initialize sidebar state - show on desktop, hide on mobile
            if (sidebar) {
                console.log('Sidebar found, initializing...');
                if (window.innerWidth < 1024) {
                    sidebar.classList.add('-translate-x-full');
                    console.log('Mobile: hiding sidebar');
                } else {
                    sidebar.classList.remove('-translate-x-full');
                    console.log('Desktop: showing sidebar');
                }
            } else {
                console.error('Sidebar not found!');
            }
            
            // Toggle sidebar on mobile
            if (toggleBtn && sidebar) {
                toggleBtn.addEventListener('click', function() {
                    sidebar.classList.toggle('-translate-x-full');
                });
            }
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (sidebar) {
                    if (window.innerWidth < 1024) {
                        sidebar.classList.add('-translate-x-full');
                    } else {
                        sidebar.classList.remove('-translate-x-full');
                    }
                }
            });
            
            // Auto-expand customer section
            try { toggleSection('customer'); } catch(e) {}
        });
    </script>
</body>
</html>


