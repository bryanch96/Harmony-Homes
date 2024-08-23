// Add a click event listener to the QR code image
const qrCodeImage = document.querySelector('.qr-code img');
qrCodeImage.addEventListener('click', () => {
    // Open the QR code URL in a new tab
    window.open(qrCodeImage.src.replace('qr-code.php?url=', ''));
});