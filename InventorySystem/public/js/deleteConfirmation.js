// Delete Confirmation Modal
window.addEventListener('showDeleteConfirmation', event => {
    const rowId = event.detail.rowId;
    // Show the confirmation modal
    document.getElementById('deleteConfirmationModal').classList.remove('hidden');
    // Handle delete confirmation
    document.getElementById('confirmDeleteButton').addEventListener('click', () => {
        // Dispatch event to delete item
        Livewire.dispatch('delete', { rowId: event.detail.rowId });
        // Hide the confirmation modal
        document.getElementById('deleteConfirmationModal').classList.add('hidden');
    });
    // Handle cancel delete
    document.getElementById('cancelDeleteButton').addEventListener('click', () => {
        // Hide the confirmation modal
        document.getElementById('deleteConfirmationModal').classList.add('hidden');
    });
});