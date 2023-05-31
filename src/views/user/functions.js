/**
 * The function toggles the display of a modal element between block and none.
 */
function open_close_modal() {
    let modal = document.getElementById('modales').style;
    (modal.display != "block") ? modal.display = "block" : modal.display = "none";
}
