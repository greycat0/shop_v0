function showPopup(event, popupID) {
    var button = event.target;
    var popup = document.getElementById(popupID);
    var popupX = pageXOffset + button.getBoundingClientRect().left;
    var popupY = pageYOffset + button.getBoundingClientRect().bottom;

    popup.firstDisplay = popup.style.display;
    button.firstZIndex = button.style.zIndex;
    button.firstBorderStyle = button.style.borderStyle;
    button.firstBorderRadius = button.style.borderRadius;
    button.firstBorder = button.style.border;
    button.style.borderRadius = "0px";
    button.style.border = '1px #e9e9e9';
    button.style.borderStyle = 'solid solid none';
    button.style.zIndex = "999";
    button.onmouseleave = function(event1) {
        if (event1.relatedTarget != popup) {
            hidePopup(popup, button)
        }
    }
    popup.style.position = 'absolute';
    popup.style.display = 'block';
    popup.style.left = popupX + 'px';
    popup.style.top = popupY - 1 + "px";
    popup.onmouseleave = function(event1) {
        hidePopup(popup, button)
    };
    document.body.appendChild(popup);
}

function hidePopup(popup, button) {
    popup.style.display = popup.firstDisplay;
    button.style.border = button.firstBorder;
	button.style.zIndex = button.firstZIndex;
    button.style.borderStyle = button.firstBorderStyle;
    button.style.borderRadius = button.firstBorderRadius;
}