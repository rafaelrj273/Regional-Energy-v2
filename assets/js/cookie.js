// Função para aceitar o consentimento de cookies
function acceptCookieConsent() {
    localStorage.setItem('cookieConsent', 'true');
    document.getElementById('cookieConsentContainer').style.display = 'none';
}

// Verifica se o consentimento de cookies já foi aceito
window.onload = function() {
    if (!localStorage.getItem('cookieConsent')) {
        document.getElementById('cookieConsentContainer').style.display = 'block';
    }
}
