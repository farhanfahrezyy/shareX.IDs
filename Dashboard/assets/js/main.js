// ShareX.ID Admin Dashboard - Main JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Initialize sidebar functionality
    initializeSidebar();
    
    // Initialize mobile responsiveness
    initializeMobileResponsive();
    
    // Initialize navigation
    initializeNavigation();

    // Wire back buttons (data-back)
    document.querySelectorAll('[data-back]').forEach(btn => {
        btn.addEventListener('click', function(e){
            e.preventDefault();
            if (history.length > 1) {
                history.back();
            } else {
                // Fallback to default dashboard
                window.location.href = 'index.php?page=waiting-list';
            }
        });
    });
});

// Sidebar functionality
function initializeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebarClose = document.getElementById('sidebar-close');
    const overlay = document.getElementById('sidebar-overlay');

    // Toggle sidebar on mobile
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            const isHidden = sidebar.classList.contains('-translate-x-full');
            if (isHidden) {
                // Show sidebar
                sidebar.classList.remove('-translate-x-full');
                if (overlay) overlay.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            } else {
                // Hide sidebar
                sidebar.classList.add('-translate-x-full');
                if (overlay) overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });
    }

    // Close sidebar
    if (sidebarClose) {
        sidebarClose.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
            if (overlay) overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    }

    // Close sidebar when clicking overlay
    if (overlay) {
        overlay.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    }

    // Auto-expand customer section by default
    toggleSection('customer');
}

// Mobile responsive functionality
function initializeMobileResponsive() {
    // Handle window resize
    window.addEventListener('resize', function() {
        const sidebar = document.getElementById('sidebar');
        if (window.innerWidth >= 1024) {
            // Desktop view - ensure sidebar is visible
            sidebar.classList.remove('-translate-x-full');
            document.body.classList.remove('overflow-hidden');
        } else {
            // Mobile view - hide sidebar by default
            sidebar.classList.add('-translate-x-full');
        }
    });

    // Handle escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.add('-translate-x-full');
            document.body.classList.remove('overflow-hidden');
        }
    });
}

// Navigation functionality
function initializeNavigation() {
    // Add active state to current page
    const currentPage = new URLSearchParams(window.location.search).get('page') || 'waiting-list';
    const navLinks = document.querySelectorAll('nav a[href*="page="]');
    
    navLinks.forEach(link => {
        const href = new URLSearchParams(link.getAttribute('href').split('?')[1] || '');
        const page = href.get('page');
        
        if (page === currentPage) {
            link.classList.add('bg-green-100', 'text-green-700', 'font-semibold');
            link.classList.remove('text-gray-600', 'hover:bg-green-50', 'hover:text-green-700');
        }
    });
}

// Toggle section functionality
function toggleSection(section) {
    const menu = document.getElementById(section + '-menu');
    const arrow = document.getElementById(section + '-arrow');
    
    if (menu && arrow) {
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            arrow.style.transform = 'rotate(90deg)';
        } else {
            menu.classList.add('hidden');
            arrow.style.transform = 'rotate(0deg)';
        }
    }
}

// Utility functions
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full`;
    
    const colors = {
        success: 'bg-green-500 text-white',
        error: 'bg-red-500 text-white',
        warning: 'bg-yellow-500 text-white',
        info: 'bg-blue-500 text-white'
    };
    
    notification.className += ` ${colors[type] || colors.info}`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 5000);
}

// Table functionality
function initializeTable() {
        const tables = document.querySelectorAll('.table');
    
        tables.forEach(table => {
        // Add hover effects
        const rows = table.querySelectorAll('tbody tr');
        rows.forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.classList.add('bg-gray-50');
            });
            
            row.addEventListener('mouseleave', function() {
                this.classList.remove('bg-gray-50');
            });
        });
    });
}

// Form functionality
function initializeForms() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
            }
        });
    });
}

// Initialize additional functionality
document.addEventListener('DOMContentLoaded', function() {
    initializeTable();
    initializeForms();
});

// Export functions for global use
window.toggleSection = toggleSection;
window.showNotification = showNotification;