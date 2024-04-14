    var inventoryButton = document.getElementById('inventoryButton');
    var documentButton = document.getElementById('documentButton');
    var inventoryTable = document.getElementById('inventoryTable');
    var documentTable = document.getElementById('documentTable');

    function switchTable(showTable, hideTable, activeButton, inactiveButton) {
        showTable.style.display = 'block';
        hideTable.style.display = 'none';
        activeButton.classList.replace('gb-lblue', 'bg-blue-900');
        inactiveButton.classList.replace('bg-blue-900', 'gb-lblue');
    }

    var lastSelectedTable = localStorage.getItem('lastSelectedTable') || 'inventory';

    switch (lastSelectedTable) {
        case 'document':
            switchTable(documentTable, inventoryTable, documentButton, inventoryButton);
            break;
        default:
            switchTable(inventoryTable, documentTable, inventoryButton, documentButton);
    }

    inventoryButton.addEventListener('click', function() {
        switchTable(inventoryTable, documentTable, inventoryButton, documentButton);
        localStorage.setItem('lastSelectedTable', 'inventory');
    });

    documentButton.addEventListener('click', function() {
        switchTable(documentTable, inventoryTable, documentButton, inventoryButton);
        localStorage.setItem('lastSelectedTable', 'document');
    });