/**
 * AYENAH Admin - Custom JavaScript
 */
document.addEventListener('DOMContentLoaded', function () {

    // === Sidebar Toggle ===
    const toggleBtn = document.getElementById('btn-toggle-sidebar');
    const sidebar = document.querySelector('.sidenav-menu');
    const overlay = document.querySelector('.sidebar-overlay');

    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            if (window.innerWidth < 992) {
                sidebar.classList.toggle('show');
                if (overlay) overlay.classList.toggle('show');
            } else {
                document.body.classList.toggle('sidebar-collapsed');
            }
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function () {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    }

    // === Lucide Icons Init ===
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // === Toast Auto-Dismiss ===
    const toasts = document.querySelectorAll('.toast[data-autohide="true"]');
    toasts.forEach(function (toastEl) {
        const toast = new bootstrap.Toast(toastEl, { delay: 5000 });
        toast.show();
    });

    // === Active Menu Highlight ===
    const currentPath = window.location.pathname;
    const menuLinks = document.querySelectorAll('.side-nav-link');

    menuLinks.forEach(function (link) {
        const href = link.getAttribute('href');
        if (!href || href === '#' || href.startsWith('http')) return;

        // Extract path from href
        let linkPath;
        try {
            linkPath = new URL(href, window.location.origin).pathname;
        } catch (e) {
            linkPath = href;
        }

        if (currentPath === linkPath) {
            link.closest('.side-nav-item').classList.add('active');
        }
    });

    // === Summernote Init (for .rich-editor textareas) ===
    if (typeof $.fn.summernote !== 'undefined') {
        $('.rich-editor:not(.modal .rich-editor)').summernote({
            height: 250,
            lang: 'fr-FR',
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ],
            callbacks: {
                onInit: function() {
                    // Fix z-index for non-modal editors
                    $(this).closest('.note-editor').css('z-index', 'auto');
                }
            }
        });

        // Re-init Summernote when modals open (with z-index fix)
        document.querySelectorAll('.modal').forEach(function (modal) {
            modal.addEventListener('shown.bs.modal', function () {
                $(modal).find('.rich-editor').each(function () {
                    if (!$(this).next('.note-editor').length) {
                        $(this).summernote({
                            height: 200,
                            lang: 'fr-FR',
                            toolbar: [
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['para', ['ul', 'ol']],
                                ['insert', ['link']],
                                ['view', ['codeview']]
                            ],
                            dialogsInBody: true
                        });
                    }
                });
                // Ensure Summernote dropdowns appear above the modal
                $(modal).find('.note-editor').css('z-index', 'auto');
            });
        });
    }

    // === Delete Confirmation ===
    document.querySelectorAll('.btn-delete-confirm').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const form = btn.closest('form');
            if (!form) return;
            const message = btn.dataset.confirm || 'Êtes-vous sûr de vouloir supprimer cet élément ?';

            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Confirmation',
                    text: message,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'
                }).then(function (result) {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            } else if (confirm(message)) {
                form.submit();
            }
        });
    });
});
