function generatePDF(){
	const element = document.getElementById("download");

	if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
    var showPopup = false;
    window.onbeforeunload = function () {
        if (showPopup) {
            return 'You must use the Cancel button to close the Print Preview window.\n';
        } else {
            showPopup = true;
        }
    }
    window.print();

  } else {
    window.print();

  }

}
